<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contact';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'subject', 'message'];
}
