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
    public function index()
    {
        $orders = Order::with('products')->where('user_id', auth()->id())->get();

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
