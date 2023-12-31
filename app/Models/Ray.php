<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Ray extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function employee()
    {
        return $this->belongsTo(RayEmployee::class, 'employee_id')->withDefault(['name' => 'NO Employee']);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
