<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudyList extends Model
{
    use HasFactory;

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

}
