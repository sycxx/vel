<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To My Laravel';
        return view('pages.elegent')->with('title', $title);
    }
    public function about(){
        $title = 'Welcome To bout Us';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services coy!',
            'services' => ['web', 'program', 'apa aja', 'kodok' ]
        );
        return view('pages.services')->with($data);
    }
}
