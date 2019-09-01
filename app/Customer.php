<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'active'];

    // or we can gaurd any filed in the database
    // if we pass the value to gaurded variable then we cannot add mass assign the value to 
    // gaurded value
    // protected $gaurded =[];
    public function scopeActive($query)
    {
        return $query->where('active', 1)->orderBy('id', 'DESC');
    }
    public function scopeInactive($query)
    {
        return $query->where('active', 0)->orderBy('id', 'DESC');
    }
}
