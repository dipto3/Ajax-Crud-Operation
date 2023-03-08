<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
      
        $products = product::latest()->paginate(5);
        return view('welcome',compact('products'));
    }
    public function add(Request $request){

        $request->validate(
            [
                'name'=>'required|unique:products',
                'price'=>'required',
                'description'=>'required',
            ],
            [
                'name.required'=>'Name is required',
                'name.unique'=>'Product Already Exist',
                'price.required'=>'Price is required',
                'description.required'=>'Description is required',
            ]
    );

    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;

    $product->save();

    return response()->json([
        'status'=>'success',
    ]);
    }

    public function updateproduct(Request $request){
        // $request->validate(
        //     [
        //         'name'=>'required|unique:products',
        //         'price'=>'required',
        //         'description'=>'required',
        //     ],

        //     [
        //         'name.required'=>'Name is required',
        //         'name.unique'=>'Product Already Exist',
        //         'price.required'=>'Price is required',
        //         'description.required'=>'Description is required',
        //     ]
       
        // );
     Product::where('id',$request->up_id)->update([
        'name'=>$request->up_name,
        'price'=>$request->up_price,
        'description'=>$request->up_description,
     ]);
         return response()->json([
            'status'=>'success',
         ]);
    }

    public function deleteproduct(Request $request){
        Product::find($request->product_id)->delete();
        return response()->json([
            'status'=>'success',
         ]);

    }

}
