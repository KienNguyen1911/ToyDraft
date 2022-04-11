@extends('admin.admin')
@section('editUser')
<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="">UserName</label>
        <input type="text" class="form-control" id="" placeholder="Enter UserName" name="username" value="{{ $user->username }}">
    </div>
    <div class="form-group">
        <label for="">Fullname</label>
        <input type="text" class="form-control" id="" placeholder="Enter Fullname" name="fullname" value="{{ $user->fullname }}">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" id="" placeholder="Enter Password" name="password" value="{{ $user->password }}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="Enter Email" name="email" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="">Phonenumber</label>
        <input type="text" class="form-control" id="" placeholder="Enter Phonenumber" name="phonenumber" value="{{ $user->phonenumber }}">
    </div>
    <div class="form-group">
        <label for="">Role</label>
        <input type="text" class="form-control" id="" placeholder="Enter Role" name="role" value="{{ $user->role }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
@endsection