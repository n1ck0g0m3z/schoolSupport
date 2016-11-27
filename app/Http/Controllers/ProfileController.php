<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use Illuminate\Support\Facades\Response;

use App\Profile;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = \Auth::user()->profile;
        
        return view('auth.regisform', ['profile' => $profile]);
    }
    
    public function store(Request $request){
        if(\Auth::User()->permission == 0){
            $this->validate($request, [
                'img' => '',
                'first_name' => 'required|max:255',
                'first_kana' => 'required|max:255',
                'last_name' => 'required|max:255',
                'last_kana' => 'required|max:255',
                'cls' => 'required|max:255',
            ]);
            
            $file = $request->img;
            $img = Image::make($file);
            $requimg = $img->encode('jpeg');
            
            \Auth::User()->profile()->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'first_kana' => $request->first_kana,
                'last_kana' => $request->last_kana,
                'img' => $requimg,
                'cls' => $request->cls
            ]);
        }else{
            $this->validate($request, [
                'img' => '',
                'first_name' => 'required|max:255',
                'first_kana' => 'required|max:255',
                'last_name' => 'required|max:255',
                'last_kana' => 'required|max:255',
                'teacher_name' => 'required|max:255',
                'cls' => 'required|max:255',
            ]);
            
            $file = $request->img;
            $img = Image::make($file);
            $requimg = $img->encode('jpeg');
            
            \Auth::User()->profile()->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'first_kana' => $request->first_kana,
                'last_kana' => $request->last_kana,
                'img' => $requimg,
                'teacher_name' => $request->teacher_name,
                'cls' => $request->cls
            ]);
        }
        
        return redirect('/');
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'first_kana' => 'required|max:255',
            'last_name' => 'required|max:255',
            'last_kana' => 'required|max:255',
            'cls' => 'required|max:255',
        ]);
        
        $file = $request->img;
        if($file){
            $img = Image::make($file);
            $requimg = $img->encode('jpeg');
        }else{
            $requimg = \Auth::User()->profile->img;
        }
        
        \Auth::User()->profile()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'first_kana' => $request->first_kana,
            'last_kana' => $request->last_kana,
            'img' => $requimg,
            'cls' => $request->cls,
        ]);
        
        return redirect('/');
    }
    
    public function teacherList()
    {
        $json = Profile::where('teacher_name','like','%'.\Auth::User()->profile->last_name.'%')->get();
        $profile = \Auth::User()->profile;
        return view('main',compact('json','profile'));
    }
}
