<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function index(){

        $products =DB::table('products')->get();
        return view('product.index',compact('products'));
    }
    public function create(){
      return view('product.create');
    }
    public function store(Request $request){
       /* dd($request->all());*/
        $data = array();
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['details']=$request->details;
        $image = $request->file('logo');
        if ($image){
            $image_name= date('dmy_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_fullname=$image_name.'.'.$ext;
            $upload_path ='public/media/';
            $image_url =$upload_path.$image_fullname;
            $success= $image->move($upload_path,$image_fullname);

            $data['logo']=$image_url;
            $product = DB::table('products')->insert($data);

//            return redirect()->back()->with('success','product created successfully!!');
            return redirect()->route('index.product')->with('success','product created successfully!!');

        }

     /* return view('product.store');*/
    }
    public function edit($id){
     /*   dd('$id');*/
        $product=DB::table('products')->where('id',$id)->first();
        return view('product.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {
        $oldlogo = $request->old_logo;

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_code'] = $request->product_code;
        $data['details'] = $request->details;
        $image = $request->file('logo');
        if ($image) {
            unlink($oldlogo);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name . '.' . $ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path . $image_fullname;
            $success = $image->move($upload_path, $image_fullname);

            $data['logo'] = $image_url;
            $product = DB::table('products')->where('id',$id)->update($data);

            return redirect()->route('index.product')->with('success', 'product Updated successfully!!');
        }
    }
}
