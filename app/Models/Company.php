<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'stagestatus', 'student_id']; 

//* Een bedrijf (company) heeft/ kan meerdere students


    public function internships()
    {
        return $this->hasMany(Internship::class); 
    }

    public function students()
    {
        return $this->hasMany(Student::class); 
    }




}
