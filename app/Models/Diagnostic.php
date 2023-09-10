<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'review_date', 'diagnosis', 'medicine', 'invoice_id', 'patient_id', 'doctoe_id'];

    // protected $guraded = [];
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    
}
