<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'no_of_days',
        'price',
        'rating',
        'details',
        'makkah_hotel',
        'madinah_hotel',
        'makkah_nights',
        'madinah_nights'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(PackageImage::class);
    }
}
