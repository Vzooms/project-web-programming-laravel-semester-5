<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudyList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function toCourse(Request $req){
        return view('course',[
            'course' => Course::where('id', $req->id)->first()
        ]);
    }
}
