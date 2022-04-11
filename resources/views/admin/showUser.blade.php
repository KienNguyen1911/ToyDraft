@extends('admin.admin')
@section('showUser')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>UserName</th>
                <th>Fullame</th>
                <th>Email</th>
                <th>Phonenumber</th>
                <th>Role</th>
                <th colspan="" style="text-align: center">Function</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $key => $value)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $value -> username }}</td>
                <td>{{ $value -> fullname }}</td>
                <td>{{ $value -> email }}</td>
                <td>{{ $value -> phonenumber }}</td> 
                <td>{{ $value -> role }}</td>
                <td style="text-align: center">
                    <a href="{{ route('editUser',['id'=>$value->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('deleteUser',['id'=>$value->id]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection