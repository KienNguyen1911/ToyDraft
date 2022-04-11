@extends('admin.admin')
@section('addCategory')

<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" class="form-control" id="" placeholder="Enter Category Name" name="categoryname">
    </div>
    <div class="form-group">
        <label for="">Category Description</label>
        <textarea  id="" cols="30" rows="10" class="form-control" type="text" name="categorydescription"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection