@extends('home')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2>Roll data</h2>
                <form action="{{ route('update_1', $student) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Student Name</label>
                        <input type="text" value="{{ $student->name }}" name="name" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label for="">Department name</label>
                        <input type="text" value="{{ $student->department->dept_name }}" name="dept_name"
                            class="form-control">

                    </div>


                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
