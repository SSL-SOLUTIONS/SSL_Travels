<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'car'; // Update the table name to 'car'
    use HasFactory;
    protected $fillable = [
        'name', 'model', 'image','rent'
    ];
}
