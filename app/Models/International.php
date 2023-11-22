<?php

namespace App\Models;  // Remove the additional "International" subnamespace

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'image', 'description', 'price'
    ];
}
