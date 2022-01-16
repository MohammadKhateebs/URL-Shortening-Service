<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\urlshort;

class UrlController extends Controller
{

public function urlshort(Request $request){

if($request->url_short){
    $newurl=urlshort::create([
        'url_short'=> $request->url_short,

    ]);
    if($newurl){
        $shorturl=base_convert($newurl->id,10,36);
        $newurl->update([
            'url_user'=>$shorturl
        ]);
        return redirect()-> back() -> with('message','your Url short is : <a style="color:green;" href="'.url($shorturl).'">'.url($shorturl));


    }
}   
return back();


}
public function show($url){
    $shorturl=urlshort::where('url_user',$url)->first();
    if($shorturl){
        return redirect()->to(url($shorturl->url_short));
    }
    return   redirect()->to(url('/'));
}


}
