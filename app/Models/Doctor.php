<?php

namespace App\Models;

use App\Models\appointment;
use App\Models\section;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    use Translatable;
    protected $table = 'doctors';
    public $fillable= ['id','email','email_verified_at','password','phone','name','section_id','status'];
    // protected $guarded=[];
    public $translatedAttributes = ['name'];

    /**
     * Get the Doctor's image.
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function section(){
        return $this->belongsTo(section::class);
    }

    public function doctorappointments(){
        return $this->belongsToMany(appointment::class,'appointment_doctor');
    }
    
}

