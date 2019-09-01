<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'phone'];

    // this compnay has many customers 
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}

