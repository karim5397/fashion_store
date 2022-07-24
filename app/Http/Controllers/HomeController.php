<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Gate::allows('admin')){
            return view('admin.home');
        }
        elseif(Gate::allows('supervisor')){
            return view('admin.home');
        }
        elseif(Gate::allows('user')){
            $data =Product::paginate(8);
            $user=auth()->user();
            $count=cart::where('phone' , $user->phone)->count();
            return view('user.home' , compact('data' ,'count'));
        }
        else{
            
            $data =Product::paginate(8);
            return view('user.home' , compact('data'));
        }
    }
    public function index(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data =Product::paginate(8);
            return view('user.home' , compact('data'));
        }
    }
    public function searchProduct(Request $request)
    {
        $search=$request->search;
        if($search == '')
        {
            $data =Product::all();
            return view('user.home' , compact('data'));
        }
        $data=Product::where('title' , 'Like' , '%'. $search .'%')->get();
        return view('user.home' , compact('data'));
    }
    public function addCart(Request $request , $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=Product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->name = $user->name;
            $cart->product_title = $product->title;
            $cart-> price = $product-> price;
            $cart-> quantity = $request->quantity;
            $cart->save();

            return redirect()->back()->with('message' , 'Product Added Successfuly');
        }
        else 
        {
            return redirect('login');
        }
    }
    public function showCart()
    {
        $user=auth()->user();
        $cart=cart::where('phone' , $user->phone)->get();
        $count=cart::where('phone' , $user->phone)->count();
        return view('user.cart' ,compact('count' , 'cart'));
    }

    public function deleteCart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message' , 'Product Deleted Successfuly');
    }
    public function confirmOrder(Request $request)
    {
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
        foreach($request->productname as $key=>$productname)
        {
            $order= new Order;
            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->status= 'not deliverd';
            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->save();
        }
        DB::table('carts')->where('phone' , $phone)->delete();
        return redirect()->back()->with('message' , 'Product Ordered Successfuly');
    }
    
    public function menCategory()
    {
        $data=Product::where('category' , 'men')->paginate(8);
        if(Gate::allows('user'))
        {
            $user=auth()->user();
            $count=cart::where('phone' , $user->phone)->count();
            return view('user.home', compact('data' ,'count' ));
        }
        else
        {

            return view('user.home', compact('data' ));
        }
    }
    public function womenCategory()
    {
        $data=Product::where('category' , 'women')->paginate(8);
        if(Gate::allows('user'))
        {
            $user=auth()->user();
            $count=cart::where('phone' , $user->phone)->count();
            return view('user.home', compact('data' ,'count' ));
        }
        else
        {

            return view('user.home', compact('data' ));
        }
    }
    public function childCategory()
    {
        $data=Product::where('category' , 'child')->paginate(8);
        if(Gate::allows('user'))
        {
            $user=auth()->user();
            $count=cart::where('phone' , $user->phone)->count();
            return view('user.home', compact('data' ,'count' ));
        }
        else
        {

            return view('user.home', compact('data' ));
        }
    }
}

