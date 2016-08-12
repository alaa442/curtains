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
use View;
use App\User;
use Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function FrontEnd(){
        try{
            $products = Product::all();
            return view('homd',compact('products'));
        }
        catch (\Exception $e) {
            return redirect('/login');
        }
    }

    public function login(){
        try{
            // $user = new User;
            // $user->name = 'admin';
            // $user->code = 'admin';
            // $user->save();
         
            $data = Input::all();
            $rules = array(
                'name' => 'required',
                'password' => 'required',
                 );

            $userdata = array(
                    'name' => Input::get('username'),
                    'code' => Input::get('password')
                );
            
            $admin=User::where('code',$userdata['code'])->first();
            $customer=Customer::where('code',$userdata['code'])->first();
            // dd($admin, $customer);  
                
                if (isset($admin))
                {
                      // $user=Auth::user();
                      return Redirect::to('/product');
                }
                if (isset($customer))
                {
                      // $user=Auth::user();
                      return Redirect::to('/index');
                }
        }
        catch (\Exception $e) {
            return redirect('/login');
        }

    }

    public function index()
    {
        try{
            $customers =  Customer::all();
            return view('customer.index', compact('customers'));
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
            return view('customer.create'); 
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
            $customer = new Customer;
            $customer->name = Input::get('name');
            $customer->phone = Input::get('phone');
            $customer->address = Input::get('address');
            
            $pin = mt_rand(1000, 9999);
            $code = str_shuffle($pin);
            $customer->code = $code;   

            $customer->save();
            return redirect('/customer');
        }
        catch (\Exception $e) {
            return view('customer.create'); 
        }   
    }

    public function ListProduct(){
        try{
            $customers = Customer::all();
            $products = Product::all();

            return view('customer.list_product',compact('customers','products'));
        }
        catch (\Exception $e) {
            return redirect('/login');
        }
    }

    public function StoreProduct(){
        try{
            $inputs = Input :: all();  
            $cust_id = Input::get('customer');
            $pro_id = Input::get('product');
            $delivery = Input::get('delivery');
            $paid = Input::get('paid');
            $rental = Input::get('rental');
            $customer = Customer::find($cust_id);
            $customer->GetProduct()->attach($cust_id,['product_id' => $pro_id, 'paied' => $paid, 'rental' => $rental, 'delivery' => $delivery]);
            $customers = Customer::all();
            return view('customer.index',compact('customers'));
        }
        catch (\Exception $e) {
            return redirect('/login');
        }
    }

    public function CreateProduct(){
        try{
            $customers = Customer::all();
            // $products = Product::all()->groupby('type');
            $products = DB::table('product')->groupBy('type')->get();
            // dd($products);
            return View::make('customer.create_product')->with('customers',$customers)->with('products',$products);
        }
        catch (\Exception $e) {
            return view('/index');
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
            $customer = Customer::find($id);
            return view('customer.edit',compact('customer'));
        }
        catch (\Exception $e) {
            return view('/index');
        }
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
        try{
            $customer = Customer::find($id);
            $customer->name = Input::get('name');
            $customer->phone = Input::get('phone');
            $customer->address = Input::get('address');
            $customer->code = Input::get('code');   

            $customer->save();
            return redirect('/customer'); 
        }
        catch (\Exception $e) {
            $customer = Customer::find($id);
            return view('customer.edit',compact('customer'));
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
            $customer = Customer::find($id);
            $customer->delete();
            return redirect('/customer');
        }
        catch (\Exception $e) {
            return view('/index');
        }
    }


}
