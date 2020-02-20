<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['firstName', 'lastName', 'gender', 'country', 'city', 'address'];
    protected $primaryKey = 'id';
}
