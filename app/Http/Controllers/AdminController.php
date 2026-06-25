<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        abort_if(!auth()->user()->can('view'), 403, 'not permsion');
        return view('admin.dashboard');
    }

    // 2. Naya data add karna (add)
    public function store(Request $request) {
        abort_if(!auth()->user()->can('add'), 403, 'not added');
        return back();
    }

    // 3. Data delete karna (delete)
    public function destroy($id) {
        abort_if(!auth()->user()->can('delete'), 403, 'not delete');
        return back();
    }
}
