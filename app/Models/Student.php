<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['name','review', 'rating', 'company_id', 'technic_id']; 
=======
    protected $fillable = ['name', 'company_id']; 
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2

    public function company()

    {
        return $this->belongsTo(Company::class); 
    }

<<<<<<< HEAD
    public function technic()
    {
        return $this->belongsTo(Technic::class); 
    }

=======
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2
}
