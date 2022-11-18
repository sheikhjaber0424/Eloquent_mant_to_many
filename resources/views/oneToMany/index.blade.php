@extends('home')
@section('content')
    <div class="container">
        <div>
            <a href="{{ route('create_2') }}"><button class="btn btn-secondary">Add phone number</button></a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>


                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student_data as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>
                                    @foreach ($student->phones as $phone)
                                        <span>{{ $phone->phone_number }}, </span>
                                    @endforeach
                                </td>

                                <td><a href="{{ route('delete_2', $student) }}"><button
                                            class="btn btn-danger">Delete</button></a></td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Phone ID</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student_data as $student)
                            @foreach ($student->phones as $phone)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $phone->id }}</td>
                                    <td>{{ $phone->phone_number }}</td>

                                    <td><a href="{{ route('edit_2', $phone) }}"><button
                                                class="btn btn-primary">Update</button></a></td>

                                    <td><a href="{{ route('delete_3', $phone) }}"><button
                                                class="btn btn-danger">Delete</button></a></td>


                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
