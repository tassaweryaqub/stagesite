<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details']; 

//* Een bedrijf (company) heeft/ kan meerdere students

    public function students()

    {
        return $this->hasMany(Student::class); 
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class); 
    }

    public function practicalteacher()
    {
        return $this->belongsTo(PracticalTeacher::class); 
    }

}
