<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Use the correct parent class
use Illuminate\Notifications\Notifiable;

class MasterAdmin extends Authenticatable
{
    use Notifiable; // Ensure you include this trait if notifications are used

    protected $table = 'master_admins'; // Agar table ka naam different hai to yahan specify karein

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}