<?php

namespace App\Models;

use App\Models\StudyList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public function StudyList()
    {
        return $this->hasOne(StudyList::class);
    }
}
