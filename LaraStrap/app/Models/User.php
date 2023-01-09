<?php

namespace App\Models;

use App\Models\StudyList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function StudyList()
    {
        return $this->belongsTo(StudyList::class, 'foreign_key', 'other_key');
    }
}
