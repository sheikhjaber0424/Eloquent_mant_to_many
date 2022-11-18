@extends('home')
@section('content')
    <div class="container">
        <div>
            <a href="{{ route('create_1') }}"><button class="btn btn-secondary">Insert data</button></a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                            {{-- <th scope="col">Update</th>
                            <th scope="col">Delete</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student_data as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->department->dept_name }}</td>
                                <td><a href="{{ route('edit_1', $student) }}"><button
                                            class="btn btn-primary">Update</button></a></td>
                                <td><a href="{{ route('delete_1', $student) }}"><button
                                            class="btn btn-danger">Delete</button></a></td>

                                {{-- <td></td>
                            <td></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
