<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::with('products')->where('user_id', auth()->id())->get();

        if(auth()->user()->role_id === 1){
            if ($request->orders == 'all_orders'){
            $orders = Order::with('products')->get();
        }}
    
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $products = Product::all();     
         
       return view('order.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_amount=0;
        $order_products = [];
        // dd($request);

        foreach($request->product as $product){
        
           array_push($order_products, intval($product));
           $price = Product::where('id', intval($product))->value('price');
           $order_amount+= $price;
        }
        // var_dump($order_amount);
        // var_dump ($order_products);

        $order = new Order;
        $order ->user_id = auth()-> id();// arba Auth::id()
        $order->order_amount = $order_amount;
        $order->save();

        $order->products()->sync($order_products);

        $details =[
            'order_id'=> $order->id,
            'order_amount' => $order_amount,
        ];

        Mail::to(auth()->user()->email)->send( new OrderMail($details));

        return redirect()-> route('order.index')->with('success', 'Order created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
       $selected_products = $order->products()->pluck('product_id')->toArray();
       $products = Product::all(); 

       return view('order.edit', compact( 'order', 'selected_products', 'products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order_amount=0;
        $order_products = [];

        foreach($request->product as $product){
        
           array_push($order_products, intval($product));
           $price = Product::where('id', intval($product))->value('price');
           $order_amount+= $price;
        }

        $order->order_amount = $order_amount;
        $order->update();

        $order->products()->sync($order_products);

        return redirect()-> route('order.index')->with('success', 'Order Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->products()->sync([]);
        $order->delete();

        return redirect()-> route('order.index')->with('success', 'Order Deleted');
    }
}
