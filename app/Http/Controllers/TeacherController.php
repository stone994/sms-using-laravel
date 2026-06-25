<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
       public function index() {
        
        abort_if(!auth()->user()->can('view students'), 403, 'Sirf teachers bache dekh sakte hain.');
        
        return view('teacher.dashboard');
    }
}
