@extends('home')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2>Roll data</h2>
                <form action="{{ route('store_2') }}" method="POST">
                    @csrf



                    <div class="mb-3">
                        <label for="">Student id</label>
                        <select class="form-select" aria-label="Default select example" name="student_id">
                            @foreach ($student as $s)
                                <option value="{{ $s->id }}">{{ $s->id }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
