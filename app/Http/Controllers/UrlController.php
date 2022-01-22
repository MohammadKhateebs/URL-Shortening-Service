<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\urlshort;

class UrlController extends Controller
{

    public function urlshort(Request $request)
    {

        if ($request->url_short) {
            if(auth()->user()){
                $newurl = auth()->user()->links()->create([
                    'url_short' => $request->url_short,

                ]);
            }else{
            $newurl = urlshort::create([
                'url_short' => $request->url_short,

            ]);
        }
            if ($newurl) {
                $shorturl = uniqid();
                $newurl->update([
                    'url_user' => $shorturl
                ]);
                return redirect()->back()->with('message', '<br><h5 class="">your Url short is</h5> : <a style="color:green;" href="' . url($shorturl) . '">' . url($shorturl));
            }
        }
        return back();
    }
    public function show($url)
    {
        $shorturl = urlshort::where('url_user', $url)->first();
        if ($shorturl) {
            return redirect()->to(url($shorturl->url_short));
        }
        return   redirect()->to(url('/'));
    }
}
