<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudyList extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasMany(User::class, 'foreign_key', 'local_key');
    }

    public function Course()
    {
        return $this->hasMany(Course::class, 'foreign_key', 'local_key');
    }

}
