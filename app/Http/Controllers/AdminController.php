<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function product()
    {
        return view('admin.product');
    }
    public function uploadProduct(Request $request)
    {
        $file = $request->file('image');
        $image_name =$file->getClientOriginalName();
        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'discription' => $request->discription,
            'image' => $image_name,
            'quantity' => $request->quantity,
            'category' => $request->category,
        ]);


        $destinationPath = 'productimage';
        $file->move($destinationPath,$file->getClientOriginalName());
        return redirect()->back()->with('message' , 'Product Added Successfuly');
    }
    public function showProduct()
    {
        $data=Product::all();
        return view('admin.showproduct' ,compact('data'));
    }
    public function deleteProduct($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message' , 'Product Deleted Successfuly');
    }
    public function UpdateProduct($id)
    {
       $data=Product::find($id);
       return view('admin.updateproduct' , compact('data'));
    }
    public function editProduct(Request $request , $id)
    {
       $data=Product::find($id);

        $file = $request->file('image');
        if($file)
        {
        $image_name =$file->getClientOriginalName();
        $destinationPath = 'productimage';
        $file->move($destinationPath,$file->getClientOriginalName());
        $data->image=$image_name;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->discription = $request->discription;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $data->update();


        return redirect()->back()->with('message' , 'Product Updated Successfuly');



    // Product::where('id' , $id)->update($request->except('_method','_token'));
    // return redirect()->back()->with('message' , 'Product Updated Successfuly');
    }
    public function showOrder()
    {
        $order=Order::all();
        return view('admin.orders' ,compact('order'));
    }
    public function updateOrderStatus($id)
    {
        $order=Order::find($id);
        $order->status='deliverd';
        $order->update();
        return redirect()->back();
    }
}