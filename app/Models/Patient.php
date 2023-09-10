<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Authenticatable
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name', 'Address'];
    public $fillable = ['email', 'Password', 'Date_Birth', 'Phone', 'Gender', 'Blood_Group'];

    // protected $append = ['name', 'Address'];

    public function scopeSearch($query, $search)
    {
        return $query->whereHas('translations', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
            //->orWhere('Address', 'like', '%' . $search . '%');
        });
    }
}
