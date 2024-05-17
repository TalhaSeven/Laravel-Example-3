<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
            $courses=[
                [
                    'course_name'=>'cse',
                    'course_data'=>010524,
                    'status'=>1
                ],
                [
                    'course_name'=>'cse',
                    'course_data'=>010524,
                    'status'=>1
                ],
                [
                    'course_name'=>'cse',
                    'course_data'=>010524,
                    'status'=>1
                ],
                [
                    'course_name'=>'cse',
                    'course_data'=>010524,
                    'status'=>1
                ],
                [
                    'course_name'=>'cse',
                    'course_data'=>010524,
                    'status'=>1
                ],
            ];
            return view('contact',compact('courses'));
        
    }
}
