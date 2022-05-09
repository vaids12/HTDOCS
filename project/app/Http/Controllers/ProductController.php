<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Brand;
use\App\Models\Product;


class ProductController extends Controller
{

    public function index()
{
$data['product'] = Product::orderBy('id','desc')->paginate(5);
return view('product.index', $data);
}

}
