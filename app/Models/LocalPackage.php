<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalPackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'price',
        'local_id',
    ];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }
}
