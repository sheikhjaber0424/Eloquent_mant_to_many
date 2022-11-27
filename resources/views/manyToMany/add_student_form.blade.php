@extends('home')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2>Add Student in Group</h2>
                <form action="{{ route('addStudent') }}" method="POST">
                    @csrf


                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Student</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
