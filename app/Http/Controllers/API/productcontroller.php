<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\post;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::select('id','tittle','views')->where('views','>',12)->get();
        $count = count($products);
        return response([
            'status'=>'success',
            'count'=>$count,
            'data' => $products

        ]);
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





       $product = product::create([
            'tittle'=> $request->tittle,
            'category'=> $request->category,
            'Company'=> $request->Company,
            'code'=> $request->code,
            'ProductDescription'=> $request->ProductDescription,
        ]);

        return response([
            'status'=>' create success',
            'product'=>$product,
           
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return response([
            'status'=>' success',
            'data'=>$post
           
        ]);
    }

    /**
   
  
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        
        $request->validate([
            'tittle'=>'required | max:50',
            'category'=>'required | max:60',
            'Company'=>'required | max:90',
            'code'=>'required | unique:products',
            'image'=>'required | mimes:png,jpeg,jpg',
            'ProductDescription'=>'required | max:300'
        ]);





       $product = product::update([
            'tittle'=> $request->tittle,
            'category'=> $request->category,
            'Company'=> $request->Company,
            'code'=> $request->code,
            'ProductDescription'=> $request->ProductDescription,
        ]);

        return response([
            'status'=>' updatesuccess',
            'product'=>$product,
           
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return response([
            'status'=>' success',
            'data'=>$post
           
        ]);
    }
}
