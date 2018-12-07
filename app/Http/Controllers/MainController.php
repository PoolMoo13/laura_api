<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subject;
use App\Question;
use App\Grade;

class MainController extends Controller
{
    public function grades(Request $request) {
        $user = User::findOrFail($request->user()->id);

        return response()->json($user->grades, 200);
    }

    public function subjects() {
        $subjects = Subject::all();
        return response()->json($subjects, 200);
    }

    public function questions(Request $request) {
        $questions = Question::where('subject_id', $request->input('subject_id'))->get();

        foreach($questions as $key => $question) {
            $questions[$key]['answers'] = [$question['answer_1'], $question['answer_2'], $question['answer_3']];
        }

        return response()->json($questions, 200);
    }

    public function saveGrade(Request $request) {
        $grade = new Grade([
            'user_id' => $request->user()->id,
            'subject' => $request->input('subject'),
            'grade' => $request->input('grade'),
        ]);
        $grade->save();

        return response()->json($grade, 200);
    }
}
