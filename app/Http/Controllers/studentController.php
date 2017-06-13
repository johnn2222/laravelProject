<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use model here
use App\student;

class studentController extends Controller
{
    //nc
    public function addStudent(Request $request){
        //die('here');
        
        $studentModel=new student();
        
        $qry=$studentModel->create($request->all());
       //print_r($request->all()); 
       echo $qry;
       die();
      // return view('signup');
    }
}
