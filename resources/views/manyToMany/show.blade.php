@extends('home')
@section('content')
    <div class="container">
        <h2>Group info </h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Group ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Students</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>

                            <td>
                                @foreach ($group->students as $student)
                                    {{ $student->name }}
                                @endforeach


                                <a href="{{ route('addStudent.form', $group) }}"><button
                                        class="btn btn-primary">Add</button></a>
                            </td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
