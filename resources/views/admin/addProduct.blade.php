@extends('admin.admin')
@section('addProduct')

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" class="form-control" id="" placeholder="Enter Product Name" name="productname">
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="">Product Price</label>
                <input type="text" class="form-control" id="" placeholder="Enter Product Price" name="productprice">
            </div>
            <div class="form-group col-xl-6">
                <label for="">Product Code</label>
                <input type="text" class="form-control" id="" placeholder="Enter Product Code" name="productcode">
            </div>
        </div>
        <div class="form-group">
            <label for="">Product Image</label>
            <input type="file" class="form-control" id="" placeholder="Enter Product Image" name="productimage">
        </div>
        <div class="form-group">
            <label for="">Product Category</label>
            <select class="form-control" name="category_id">
                @foreach($category as $value)
                <option value="{{ $value->id }}">{{ $value->categoryname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Product Description</label>
            <textarea  id="" cols="30" rows="10" class="form-control" type="text" name="productdescription"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>`

    @endsection