<?php

namespace App\Http\Controllers;

use App\Models\StudyList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudyListController extends Controller
{
    public function toStudyList(){
        return view('StudyList.studylist',[
            'studyList' => StudyList::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function createStudyList(Request $req){
        StudyList::insert([
            'user_id' => auth()->user()->id,
            'course_id' => $req->id
        ]);

        return redirect('/studyList');
    }

    public function deleteStudyList(Request $req){
        StudyList::where('id', $req->id)->delete();

        return redirect('/studyList');
    }
}
