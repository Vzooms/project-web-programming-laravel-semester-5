<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function toStudyList(){
        return view('studylist',[
            'studyList' => StudyList::where('user_id', auth()->user()->id)
        ]);
    }


}
