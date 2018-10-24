<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        $title = 'Welcome to Page Home!';
        // return view('pages.index',compact('title'));
        return view('pages.home')->with('title',$title);
    }
    public function index(){
        $title = 'Welcome to Page Index';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About this page';
        return view('pages.about',compact('title'));
    }
    public function services(){
        // $title = 'Server this page';
        $data = array(
            'title' => 'Services this page',
            'services' => ['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}