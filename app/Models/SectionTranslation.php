<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTranslation extends Model
{
    protected $table = 'section_tanslations';

    protected $fillable = ['name','description'];
    public $timestamps = false;
    use HasFactory;
}
