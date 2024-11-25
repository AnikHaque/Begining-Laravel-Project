<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function sayHello(){
        return "Hello World123";
    }

    function courseName(){
        return "Hello from ostad";
    }

       function dashboard(){
        return view('dashboard');
    }

 function dynamic(Request $request): string {
    $name = $request->name; // Access the name property from the request
    return "My name is {$name}"; // Proper syntax for variable interpolation
}

}
