<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function all(){
    	$products = DB::table('products')
    			  ->join('categories','categories.id','products.category_id')
    			  ->select('products.id','products.title','categories.name')
    			  ->get();//to get all data
    	//$products = Product::all();
    	return view('products',['products'=>$products]);
    }
}
