<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function get_students_name(){
    	static $name_stud = array(0=>"Islam",1=>"Maksat",2=>"Alshyn",3=>"Ernur");
    	return $name_stud;
    }

    public function get_students_date(){
    	static $date = array(0=>"02.07.2002",1=>"03.06.2002",2=>"07.02.2002",3=>"12.01.2001");
    	return $date;
    }

    public function get_students_age(){
    	static $age = array(0=>18,1=>18,2=>18,3=>19);
    	return $age;
    }

    public function show_name($id){
    	$name_stud = $this->get_students_name();
    	return view('name',["name1" => $name_stud[$id]]);

    }

    public function show_date($id){
    	$date = $this->get_students_date();
    	return view('date_birth') -> with('stud_birth',$date[$id]);
    }

    public function show_age($id){
    	$age = $this->get_students_age();
    	return view('student_age',compact($age[$id]));
    }
}
