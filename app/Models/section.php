<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 1. To specify package’s class you are using
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\section_translations;

class section extends Model 
{
    use Translatable; // 2. To add translation methods
    protected $fillable =['name','description'];
    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name','description'];
    use HasFactory;


    /// Relation (One To Many)
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
