<?php

namespace App\Models\International;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    use HasFactory;
    protected $fillable =[
        'title', 'image','description','price'
    ];
}
