<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class FormProcessor extends Controller
{
    use ValidatesRequests;

    public function index() {
        return view('form');
    }
    // Оно, конечно, в большинстве браузеров этот view не будет показывать, однако 
    public function store() {
        return redirect(route('greet', ['name' => request()['fname']]));
    }

    public function greet() {
        $this->validate(request(), [
            'name' => 'required'
        ]);
        return view('greet')->with('name', request()['name']);
    }
}
