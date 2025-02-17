<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $galleries = Gallery::orderBy('created_at','desc')->paginate(12);
        return view('galleryindex',compact('galleries'));
    }   
}
