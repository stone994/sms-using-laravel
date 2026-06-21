<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'father_name',
    'gender',
    'dob'
];
    public function hobbies()
    {
return $this->belongsToMany(Hobbies::class, 'student_hobbies', 'student_id', 'hobbies_id');    }
}
