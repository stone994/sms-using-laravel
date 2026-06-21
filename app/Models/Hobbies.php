<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    use HasFactory;

    public $timestamps = false;

        public function students()
    {
        return $this->belongsToMany(Student::class, 'student_hobbies');
    }

}
