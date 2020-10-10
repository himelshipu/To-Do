@extends('product.layout')
@section('content')

    <div class="container">
 <div class="row">
     <div class="col-lg-12">
         <div class="float-left">
             <h2>All Product List</h2>
         </div>

         <div class="float-right">
             <a href="{{route('crate.product')}}" class="btn btn-success">Create New Product</a>
         </div>

     </div>
 </div>

        <div class="row">
            <div class="col-12">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                @endif
                <table class="table table-bordered table-striped">
                    <tr style="" class="text-center">
                        <th width="15%">Product_name</th>
                        <th width="15%">Product_code</th>
                        <th width="30%">Details</th>
                        <th width="15%">Logo</th>
                        <th width="25%">Action</th>
                    </tr>
                    @foreach($products as $product)++
                    <tr>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_code}}</td>
                        <td>{{$product->details}}</td>
                        <td><img src="{{URL::to($product->logo)}}" alt="" {{--height="100%"--}} width="100%"> </td>

                        <td>
                            <a href="" class="btn btn-info">Show</a>
                            <a href="{{URL::to('edit/product/'.$product->id)}}" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection
