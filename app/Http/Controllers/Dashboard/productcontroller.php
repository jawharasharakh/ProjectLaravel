<?php

namespace App\Http\Controllers\Dashboard;
use App\product;
use App\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $products = product::all();
       $products = product::paginate(10);

        //$products = DB::table('products')->get();
        //dd($products);
        //foreach ($products as $product){
            //echo $products->title.'<br>';

        //$products=DB::table('products')->pluck('title','id');
        //dd($products);
       
        return view('dashboard.product.index',compact('products'));
            
       
            
       
        //dd();
        //return view ('dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('dashboard.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'tittle'=>'required | max:50',
           'category'=>'required | max:60',
           'Company'=>'required | max:90',
           'code'=>'required | unique:products',
           'image'=>'required | mimes:png,jpeg,jpg',
           'ProductDescription'=>'required | max:300'
       ]);
       // dd($request->toArray());
       $product = new product();
       $product->tittle =$request->tittle;
       $product->category =$request->category;
       $product->Company =$request->Company;
       $product->code=$request->code;
       $product->ProductDescription=$request->ProductDescription;
       $productImage = $request->file('image');
       $fileName = time().'.'.$productImage->extension(); 


       $productImage->move('product images',$fileName);
       $product->image = $fileName; 
       
      

       $product->save();
       return redirect()->route ('product.index')->with('success','product create successfuly');
       
       
      
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
        $categories = category::all();
        return view('dashboardproduct.edit',compact('categories'));
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
        //dd($request->toArray());
        $product->tittle =$request->tittle;
       $product->category =$request->category;
       $product->Company =$request->Company;
       $product->ProductDescription=$request->ProductDescription;
      

       $product->save();
       return redirect()->route ('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product->delete();
        return redirect()->route ('product.index');
    }
}
