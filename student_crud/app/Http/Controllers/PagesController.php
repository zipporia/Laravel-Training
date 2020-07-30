<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcom to Index Mark!!";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function services(){
        $title = "Welcom to services Mark!!";
        return view('pages.services')->with('title', $title);
    }

    public function about(){
        $data = array(
            'title' => 'About values',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.about')->with($data);
    }
}
