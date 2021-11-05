<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticalTeacher extends Model
{
    use HasFactory;

    public function Company()
    {
        return $this->belongsTo(Company::class); 
    }
}
