<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $name  = "Yan";
        $age  = 21;
        $job = "Full Stack Developer & Mobile";
        $array = [10, 20, 30, 40, 50, 60, 70, 80, 90];
        $names = ["Yan", "Kaiky", "Augusto", "Miles", "Carlos", "Eliza", "Jacira"];

        return view('welcome', [
            "name" => $name,
            "age" => $age,
            "job" => $job,
            "array" => $array,
            "names" => $names
        ]);
    }

    public function store()
    {
        return view('events.create');
    }
}
