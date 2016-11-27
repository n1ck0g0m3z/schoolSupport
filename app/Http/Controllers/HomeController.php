<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Data;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::User();
        if($user->permission == 0){
            return view('teacher',compact('user'));
        }
        $json = Data::where('student_id',$user->profile->id)->latest()->get();
        
        return view('student',compact('user','json'));
    }
}
