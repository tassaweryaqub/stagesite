<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','review', 'rating', 'company_id', 'technic_id']; 

    public function company()

    {
        return $this->belongsTo(Company::class); 
    }

    public function technic()
    {
        return $this->belongsTo(Technic::class); 
    }

}
