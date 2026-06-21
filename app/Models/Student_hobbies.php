<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


#[Fillable(['student_id', 'hobbies_id'])]
class Student_hobbies extends Model
{
   use HasFactory;
   public $timestamps = false;
   protected $table='Student_hobbies';
}
