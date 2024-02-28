<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'image',
    ];

    // public $timestamps = false; // sd neu cot created_at va updated_at khong ton tai

    public function fullName():Attribute {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['name'] . '('. $attributes['short_name'] .')',
        );
    }

    public function createdAt():Attribute {
        return Attribute::make(
            get: function ($value, $attributes) {
                $date = new DateTime($attributes['created_at']);
                return $date->format('d-m-Y');
            }
        );
    }
}
