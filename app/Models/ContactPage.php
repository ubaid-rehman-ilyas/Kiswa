<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $table = 'contactpage';
    protected $fillable = [
        'heading',
        'banner_heading',
        'sub_heading',
        'section_one_heading',
        'form_heading',
        'form_heading_two',
        'form_heading_three',
        'form_heading_four',
    ];
}
