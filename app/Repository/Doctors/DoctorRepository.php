<?php

namespace App\Repository\Doctors;

use App\Http\Requests\CreateDoctorRequest;
use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Models\appointment;
use App\Models\Doctor;
use App\Models\Image;
use App\Models\Section;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

/**
 * Summary of DoctorRepository
 */
class DoctorRepository implements DoctorRepositoryInterface
{
    use UploadTrait;

    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $doctors = Doctor::with('doctorappointments')->get();
        return view('Dashboard.Doctors.index', compact('doctors'));
    }


    public function create()
    {
        $sections = Section::all();
        $appointments = appointment::all();
        return view('Dashboard.Doctors.add', compact('sections', 'appointments'));
    }


    public function store(CreateDoctorRequest $request)
    {
        DB::beginTransaction();
        try {
            $doctors = new Doctor();
            $doctors->email = $request->email;
            $doctors->password = Hash::make($request->password);
            $doctors->section_id = $request->section_id;
            $doctors->phone = $request->phone;
            $doctors->status = 1;
            $doctors->email_verified_at = now();
            $doctors->save();
            // store trans
            $doctors->name = $request->name;


            $doctor = Doctor::create($request->only('name', 'email'));

            // insert pivot TABLE
            $doctors->doctorappointments()->attach($request->appointments);
            $doctors->save();

            //Upload img
            $this->verifyAndStoreImage($request, 'photo', 'doctors', 'upload_image', $doctors->id, 'App\Models\Doctor');

            DB::commit();
            session()->flash('add');
            return redirect()->route('Doctors.create');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Summary of update
     * @param mixed $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function update($request)
    {
        DB::beginTransaction();

        try {

            $doctor = Doctor::findorfail($request->id);

            $doctor->email = $request->email;
            $doctor->section_id = $request->section_id;
            $doctor->phone = $request->phone;
            // $doctor->save();
            // store trans
            $doctor->name = $request->name;
            $doctor->save();

            // update pivot TABLE
            $doctor->doctorappointments()->sync($request->appointments);

            // update photo
            if ($request->has('photo')) {
                // Delete old photo
                if ($doctor->image) {
                    $old_img = $doctor->image->filename;
                    $this->upload_attachment('upload_image', 'doctors/' . $old_img, $request->id);
                }
                //Upload img
                $this->verifyAndStoreImage($request, 'photo', 'doctors', 'upload_image', $request->id, 'App\Models\Doctor');
            }

            DB::commit();
            session()->flash('edit');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Summary of destroy
     * @param mixed $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function destroy($request)
    {
        if ($request->page_id == 1) {
            if ($request->filename) {
                $this->Delete_attachment('upload_image', 'doctors/' . $request->filename, $request->id, $request->filename);
            }
            Doctor::destroy($request->id);
            session()->flash('delete');
            return redirect()->route('Doctors.index');
        } else {
            // delete selector doctor
            $delete_select_id = explode(",", $request->delete_select_id);
            $doctors = Doctor::whereIn('id', $delete_select_id)->get();

            foreach ($doctods as $doctor) {
                if ($doctor->image) {
                    $this->Delete_attachment('upload_image', 'doctors/' . $doctor->image->filename, $ids_doctors, $doctor->image->filename);
                }
            }
            Doctor::destroy($delete_select_id);
            session()->flash('delete');
            return redirect()->route('Doctors.index');
        }
    }

    public function edit($id)
    {
        $doctor = Doctor::findorfail($id);
        $sections = Section::all();
        $appointments = appointment::all();
        return view('Dashboard.Doctors.edit', compact('doctor', 'sections', 'appointments'));
    }

    public function update_password($request)
    {
        $request->validate([
            'password' => ['required', 'confirmed']
        ]);
        $doctor = Doctor::findorfail($request->id);
        $doctor->update([
            'password' => Hash::make($request->password)
        ]);

        session()->flash('edit');
        return redirect()->back();
    }

    public function update_status($request)
    {
        try {
            $doctor = Doctor::findorfail($request->id);
            $doctor->update([
                'status' => $request->status
            ]);

            session()->flash('edit');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
