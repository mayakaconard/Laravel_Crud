<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email_address','mobile'];

    protected $table='details';
}
