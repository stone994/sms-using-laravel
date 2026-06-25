<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleStudentController extends Controller
{
    public function index() {
        abort_if(!auth()->user()->can('view own profile'), 403, 'Aap apni profile nahi dekh sakte.');
        return view('student.dashboard');
    }
}
