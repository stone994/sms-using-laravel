@extends('layout')
@section('title')
    All Student
@endsection

@section('content')
    
<div class="col-md-6">
            <a href="{{ route('students.create') }}" class="btn btn-info text-white">+Add Student</a>    
            </div>
                <table class="mt-3 table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                        <th>Dob</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student -> id }}</td>
                            <td>{{ $student -> name }}</td>
                            <td>{{ $student -> father_name }}</td>
                            <td>{{ $student -> gender }}</td>
    <td>
            @foreach($student->hobbies as $hobbies)
                {{ $hobbies->name }},
            @endforeach
        </td>                        <td>{{ $student -> dob }}</td>
                            <td><a href="{{ route('students.show',$student->id) }}" class="btn btn-info">View</a></td>
                            <td><a href="{{ route('students.edit',$student->id) }}" class="btn btn-warning">Edit</a></td>
                            <td>
                                <form action="{{ route('students.destroy',$student->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </table>
          @endsection