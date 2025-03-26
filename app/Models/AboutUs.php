<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'banner_heading',
        'banner_text',
        'heading',
        'sub_heading',
        'text',
        'heading_two',
        'heading_three',
        'sub_heading_two',
        'text_two',
    ];
}
