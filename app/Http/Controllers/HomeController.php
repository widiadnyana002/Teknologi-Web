<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $title="Landing Page";
        $products=Products::all();
        return view('landingpage.frontpage', compact('title','products'));
    }

    function orderPage($product_id){
        $product=Products::find($product_id);
        return view('landingpage.orderpage', compact('product'));
    }

    function cart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$request->session()->get('user')->id;
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/loginpage');
        }   
    }

    static function cartCount(){
        $userId=Session::get('user')->id;
        return Cart::where('user_id', $userId)->count();
    }

    function cartList(){
        $userId=Session::get('user')->id;
        $product=DB::table('cart')
        ->join('products','cart.product_id','=','products.product_id')
        ->where('cart.user_id', $userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('landingpage.cartlist',['products'=>$product]);
    }

    function cartRemove($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    function orderNow(){
        $userId=Session::get('user')->id;
        $product=DB::table('cart')
        ->join('products','cart.product_id','=','products.product_id')
        ->where('cart.user_id', $userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('landingpage.ordernow',['products'=>$product]);
    }

    function orderPlace(Request $request)
    {
        $userId=Session::get('user')->id;
        $allCart=Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order=new Order;
            $order->first_name=$request->firstname;
            $order->last_name=$request->lastname;
            $order->email=$request->email;
            $order->product_id=$cart->product_id;
            $order->user_id=$cart->user_id;
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->city=$request->city;
            $order->postcode=$request->postcode;
            $order->noted=$request->noted;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $request->input();
        return redirect('/');
    }

    function orderList(){
        $userId=Session::get('user')->id;
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=','products.product_id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('landingpage.orderlist',['orders'=>$orders]);
    }

    function orderRemove($id){
        Cart::destroy($id);
        return redirect('/ordernow');
    }
}
