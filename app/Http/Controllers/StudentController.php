<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Hobbies;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$students = Student::with('hobbies')
    ->orderBy('id','desc')
    ->get();
            return view('home',compact('students'));
            abort_if(!auth()->user()->hasAnyRole(['admin', 'teacher']), 403);

    $students = User::role('student')->get(); // Ya jo bhi aapka logic hai students lane ka
    return view('students.index', compact('students'));
                
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $hobbies = Hobbies::all();
    $student = new Student(); // empty model

    return view('add', compact('hobbies', 'student'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
{
    $student = Student::create($request->validated());

    $student->hobbies()->attach($request->hobbies_id ?? []);

    return redirect()->route('students.index')
        ->with('status', 'Student created successfully');
}

    /**
     * Display the specified resource.
     */
   public function show($id)
{
    $student = Student::with('hobbies')->findOrFail($id);

    return view('view', compact('student'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
{
    $hobbies = Hobbies::all();

    $student->hobbies_id = $student->hobbies->pluck('id')->toArray();

    return view('update', compact('student', 'hobbies'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        
        $student->hobbies()->sync($request->hobbies_id);
        $student->update($request->validated());
        return redirect()->route('students.index')
        ->with('status','update data Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $student = Student::findOrFail($id);

    // remove relationships first
    $student->hobbies()->detach();

    // then delete student
    $student->delete();

    return redirect()->route('students.index')
        ->with('status', 'Delete successful');
}
}
