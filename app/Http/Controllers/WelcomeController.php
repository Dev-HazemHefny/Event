<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::with('country','tags',)->where('start_date','=>',today())->orderBy('created_at','asc')->get();
        return view('welcome',compact('events'));
    }
}
