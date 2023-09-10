<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Sections\SectionRepositoryInterface;
use Illuminate\Http\Request;


class SectionController extends Controller
{
    private  $Sections;

    public function __construct(SectionRepositoryInterface $Sections) 
    {
        $this->Sections = $Sections;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->Sections->index();
    }

    public function show($id){
        return $this->Sections->show($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Sections->store($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->Sections->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        return $this->Sections->destroy($request);
    }
}
 