<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name']; 

//* Een bedrijf (company) heeft/ kan meerdere students

    public function students()

    {
        return $this->hasMany(Student::class); 
    }

    public function internship()
    {
        return $this->belongsTo(internship::class); 
    }

}
