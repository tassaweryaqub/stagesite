<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [ 'company_id', 'practicalteacher_id', 'begindate', 'enddate']; 

  public function company()
  {
      return $this->belongsTo(Company::class); 
  }

  public function practicalteacher()

{
    return $this->belongsTo(Practicalteacher::class); 
}

public function student()
{
    return $this->hasMany(Student::class); 
}

  


}
