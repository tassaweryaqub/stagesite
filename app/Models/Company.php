<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'details', 'stagestatus']; 

//* Een bedrijf (company) heeft/ kan meerdere students


    public function internships()
    {
        return $this->hasMany(Internship::class); 
    }




}
