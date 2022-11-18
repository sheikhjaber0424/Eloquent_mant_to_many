@extends('home')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2>Roll data</h2>
                <form action="{{ route('store_1') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Student Name</label>
                        <input type="text" name="name" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label for="">Department name</label>
                        <input type="text" name="dept_name" class="form-control">

                    </div>

                    {{-- <div class="mb-3">
                        <label for="">Student id</label>
                        <select class="form-select" aria-label="Default select example">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
