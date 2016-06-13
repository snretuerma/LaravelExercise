<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Auth;

class ProductController extends Controller
{
  public function __construct(){

  }

  public function getProduct(Request $request){
        $user = Auth::user();
        $products = $user->products;
        return view('home',compact('products'));
    }

  public function addProduct(Request $request){
    $product = new Product;
    $product->name = $request->name;
    $product->type = $request->type;
    $product->breed = $request->type;
    $request->user()->products()->save($product);
    return redirect('home');
  }

  public function deleteProduct(Request $request){
    $product = Product::find($request->id);
    $product->delete();
    return redirect('home');
  }

}
