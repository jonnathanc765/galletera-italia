<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Failed extends Model
{
    protected $fillable = ['name', 'phone', 'company', 'email', 'city'];
}
