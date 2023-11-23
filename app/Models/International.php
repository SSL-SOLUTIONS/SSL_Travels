<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'image', 'description'
    ];
    public function internationalPackages()
    {
        return $this->hasMany(InternationalPackage::class);
    }

}
