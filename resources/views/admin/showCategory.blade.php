@extends('admin.admin')
@section('showCategory')
<table class="table table-hover">
    <thead style="text-align: center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category Des</th>
        <th scope="col" colspan="2" >Function</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($category as $key => $value)
        <tr style="text-align: center">
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $value -> categoryname }}</td>
            <td>{{ $value -> categorydescription }}</td>
            <td><a href="{{ route('editCategory',['id'=>$value->id]) }}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{ route('deleteCategory',['id'=>$value->id]) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
@endsection