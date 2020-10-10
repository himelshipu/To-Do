@extends('product.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2>Edit Your Product</h2>
            </div>

            <div class="float-right">
                <a href="{{route('index.product')}}" class="btn btn-success">Back</a>
            </div>

        </div>
    </div>

    <form action="{{url('update/product/'.$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Code:</strong>
                    <input type="text" name="product_code" class="form-control" value="{{$product->product_code}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="details" id="" class="form-control" value="{{$product->details}}"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>previous image</strong><br>
                    <img src="{{URL::to($product->logo)}}" alt="" height="80px" width="80px">
                    <input type="hidden" name="old_logo" value="{{$product->logo}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>new image</strong><br>
                    <input type="file" name="logo" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
