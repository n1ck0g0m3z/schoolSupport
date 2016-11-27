<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use App\Profile;

use App\Data;

class DataController extends Controller
{
    public function create($id)
    {
        if(\Auth::User()->permission == 0){
            $profile = Profile::findOrFail($id);
            return view('data',compact('profile'));
        }
        return view('/home');
    }
    
    public function edit()
    {
        return view('data');
    }
    
    public function store(Request $request)
    {
        $data = new Data($request->all());
        $profile = \Auth::User()->profile;
        
        $file = $request['file'];
        $requimg = $file;
        if($file){
            $img = Image::make($file);
            $requimg = $img->encode('jpeg');
        }
        
        $profile->data()->create([
            'testName' => $request->testName,
            'testPoint' => $request->testPoint,
            'grade' => $request->grade,
            'attendance' => $request->attendance,
            'file' => $requimg,
            'student_id' => $request->student_id,
        ]);
        return redirect('/home/teacher');
    }
    
    public function update()
    {
        
    }
}
