<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MessageController extends Controller
{
    public function index()
    {
        return view('messagebox');
    }
    
    public function create()
    {
        return view('newmessage');
    }
    
    public function createMail()
    {
        return view('senseimessage');
    }
    public function createId()
    {
        return view('newmessage');
    }
    
    public function createMailId()
    {
        return view('senseimessage');
    }
}
