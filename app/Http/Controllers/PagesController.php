<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function home(){
    //     return view('pages.')
    // }
    public function home(){
        // $title = 'Welcome to Index Page';
        // return view('pages.index',compact('title'));
        return view('posts.index');
    }
    public function index(){
        $title = 'Welcome to Index Page';
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