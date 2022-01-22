<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLinksController extends Controller
{

public function index(){
    $links = auth()->user()->links;

    return view('links.link',compact('links'));
}

}
