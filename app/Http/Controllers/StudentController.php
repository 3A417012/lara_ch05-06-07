<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class StudentController extends Controller
{
    public function getStudentData($student_no){
		//return "學號：".$student_no;
		return View::make('score',[
			'student_no' => $student_no,
			'subject' => null
		]);
	}
	public function getStudentScore($student_no,$subject = null){
		//return "學號 ".$student_no." 的 ".((is_null($subject))?"所有科目":$subject)." 成績";
		return View::make('score',[
			'student_no' => $student_no,
			'subject' => $subject
		]);
	}
}
