<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingPage;
use Image;
use File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class LandingPageController extends Controller
{
    public $path;
    public $dimensions;

    public function __construct()
    {
        //DEFINISIKAN PATH
        $this->path = storage_path('app/public/images');
        //DEFINISIKAN DIMENSI
        $this->dimensions = ['100'];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LandingData = LandingPage::find(1);
        return view('home/index',compact('LandingData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        echo $request->all();
        die;
        $LandingData = LandingPage::findOrFail($id);
        $youtube_url = $request->youtube_url;
        $youtube_token = substr($youtube_url,32);
        $LandingData->update([
            'years_experience' => $request->years_experience,
            'meta_title' => $request->meta_title,
            'meta_content' => $request->meta_content,
            'youtube_url' => $youtube_token,
            'hero_image' => 'hero.png',
           

        ]);
       
    
    
    return redirect('/home');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
