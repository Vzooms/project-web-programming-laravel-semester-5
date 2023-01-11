<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudyList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function toCourse($id){
        return view('course',[
            'course' => Course::where('id', $id)->first()
        ]);
    }

    public function searchCourse(Request $req){
        return view('home.home',[
            'courses' => Course::where('name', 'LIKE', "%".$req->search."%")->get()
        ]);
    }
}
