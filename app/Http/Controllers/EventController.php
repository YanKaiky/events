<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event();

        $event->title = (string) $request->title;
        $event->city = (string) $request->city;
        $event->private = (bool) $request->private;
        $event->description = (string) $request->description;

        $event->save();

        return redirect('/')->with('msg', 'Event created successfully');
    }
}
