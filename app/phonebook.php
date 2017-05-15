<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phonebook extends Model
{
    //
    protected $fillable = ['name', 'email', 'work', 'twitter', 'phone'];
}
