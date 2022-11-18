<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department()
    {
        return $this->hasOne(Department::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}