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
            'course_id' => $req->course_id,
            'completed' => 'false'
        ]);

        return redirect('/studyList');
    }

    public function deleteStudyList(Request $req){
        StudyList::where([
            ['user_id', auth()->user()->id],
            ['course_id', $req->course_id]
        ])->delete();

        return redirect('/studyList');
    }

    public function completeStudyList(Request $req){
        // dump($req->course_id);
        // dump(auth()->user()->id);
        // die();
        StudyList::where([
            ['user_id', auth()->user()->id],
            ['course_id', $req->course_id]
        ])->update([
            'completed' => 'true'
        ]);

        return redirect('/profile');
    }

    public function unCompleteStudyList(Request $req){
        StudyList::where([
            ['user_id', auth()->user()->id],
            ['course_id', $req->course_id]
        ])->update([
            'completed' => 'false'
        ]);

        return redirect('/profile');
    }
}
