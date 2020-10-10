@extends('product.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2>Add new Product</h2>
            </div>

            <div class="float-right">
                <a href="{{route('index.product')}}" class="btn btn-success">Back</a>
            </div>

        </div>
    </div>

    <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="product_name" class="form-control">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Code:</strong>
                    <input type="text" name="product_code" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="details" id="" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Logo:</strong><br>
                    <input type="file" name="logo" class="">
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
