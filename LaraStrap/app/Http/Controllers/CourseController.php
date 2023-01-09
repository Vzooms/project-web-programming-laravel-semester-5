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

    public function createCourse(Request $req){

        StudyList::insert([
            'name' => $req->name,
            'description' => $req->description,
            'logo' => $req->logo,
        ]);

        return redirect('/createStudyList',[
            'req' => StudyList::all()->reverse()->first()
        ]);
    }

    public function deleteCourse(Request $req){
        StudyList::where('id', $req->id)->delete();

        return redirect('/deleteStudyList',[
            'req' => $req
        ])
    }

}
