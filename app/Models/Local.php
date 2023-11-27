<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'title','description','image',
    ];
    public function localpackages()
    {
        return $this->hasMany(LocalPackage::class);
    }
}
