<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    public function practicalteacher()
    {
        return $this->belongsTo(PracticalTeacher::class); 
    }

    public function students()
    {
        return $this->hasMany(Student::class); 
    }


}
