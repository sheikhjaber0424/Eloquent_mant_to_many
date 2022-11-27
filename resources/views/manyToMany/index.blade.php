@extends('home')
@section('content')
    <div class="container">
        <div>
            <a href="{{ route('create_3') }}"><button class="btn btn-secondary">Add new group</button></a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Group ID</th>
                            <th scope="col">Name</th>


                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($group_data as $group)
                            <tr>
                                <td>{{ $group->id }}</td>
                                <td>{{ $group->name }}</td>


                                <td><a href="{{ route('show', $group) }}"><button class="btn btn-success">View</button></a>
                                    <a href="{{ route('delete_4', $group) }}"><button
                                            class="btn btn-danger">Delete</button></a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
