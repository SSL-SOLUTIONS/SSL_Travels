<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartment'; // Update the table name to 'car'
    use HasFactory;
    protected $fillable = [
        'price', 'rooms', 'image'
    ];
}
