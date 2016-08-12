<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Customer;
use Input;
use File;
use Validator;
use DB;
use Redirect;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $products =  Product::all();
            return view('product.index', compact('products'));
        }
        catch (\Exception $e) {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            return view('product.create'); 
        }
        catch (\Exception $e) {
            return redirect('/login'); 
        }  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $inputs = Input :: all();    
            $product = new Product;
            $product->type = Input::get('type');
            $product->place = Input::get('place');
            $product->price = Input::get('price');
            $product->availablty = Input::get('availablty');
            $big_image = Image::make(Input::file('img')->getRealPath())
                            ->resize(300, 200);
            $product->img = $big_image->encode('jpg', 80);                        
            $product->save();
            return redirect('/product');
        }
        catch (\Exception $e) {
            return view('product.create'); 
        }          
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
        try{
            $product = Product::find($id);
            return view('product.edit',compact('product'));
        }
        catch (\Exception $e) {
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        try{
            $product = Product::find($id);
            $inputs = Input :: all();    
            $product->type = Input::get('type');
            $product->place = Input::get('place');
            $product->price = Input::get('price');
            $product->availablty = Input::get('availablty');

            $product->save();
            return redirect('/product'); 
        }
        catch (\Exception $e) {
            $product = Product::find($id);
            return view('product.edit',compact('product'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $product = Product::find($id);
            $product->delete();
            return redirect('/product');
        }
        catch (\Exception $e) {
            return redirect('/login');
        }
    }

}
