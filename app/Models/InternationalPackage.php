<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalPackage extends Model
{
    use HasFactory;
    protected $table = 'internationalspackages';
    protected $fillable = [
        'title',
        'image',
        'price',
        'description',
        'international_id',
    ];

    public function international()
    {
        return $this->belongsTo(International::class);
    }
}
