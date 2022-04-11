@extends('admin.admin')
@section('showProduct')
    <table class="table table-hover">
        <thead style="text-align: center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Img</th>
            <th scope="col">Category</th>
            {{-- <th scope="col">Description</th> --}}
            <th scope="col" colspan="2" >Function</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
            <tr style="text-align: center">
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $value -> productname }}</td>
                <td>{{ $value -> productcode }}</td>
                <td>{{ $value -> productprice }}</td>
                <td>
                    <img src=" {{asset('../img/products/'.$value->productimage)}} " alt="" style="width:100px">
                </td>
                {{-- <td>{{$value -> productimage}}</td> --}}
                <td>{{ $value -> categoryname }}</td> 
                {{-- <td>{{ $value -> productdescription }}</td> --}}
                <td><a href="{{ route('editProduct',['id'=>$value->id]) }}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ route('deleteProduct',['id'=>$value->id]) }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection