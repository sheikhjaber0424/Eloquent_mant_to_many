@extends('home')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h2>Roll data</h2>
                <form action="{{ route('update_2', $phone) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Phone number</label>
                        <input type="text" value="{{ $phone->phone_number }}" name="phone_number" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
