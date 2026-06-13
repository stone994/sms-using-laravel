<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('home',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'father_name'=>'required|string',
            'dob'=>'required|date',
        ]);
        Student::create([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'dob'=>$request->dob,
        ]);
        return redirect()->route('students.index')
        ->with('status','Add New Student Successfullt');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=Student::find($id);
        return view('view',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students=Student::find($id);
        return view('update',compact('students'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|string',
            'father_name'=>'required|string',
            'dob'=>'required|date',
        ]);
        $students = Student::where('id',$id)
                ->create([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'dob'=>$request->dob,
        ]);
        return redirect()->route('students.index')
        ->with('status','update data Successfullt');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students=Student::find($id);
        $students->delete();
         return redirect()->route('students.index')
        ->with('status','delete Successfullt');
    }
}
