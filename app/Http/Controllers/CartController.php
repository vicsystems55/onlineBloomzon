<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Auth;
use Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($productId)
    {
        
        $product = product::find($productId);
        // add the product to cart
        \Cart::session(Auth::user()->id)->add(array(
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->unit_price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return back();
    }

    public function index()
    {
        $user_id = auth()->user()->id; // or any string represents user identifier
        $cartContent = \Cart::session($user_id)->getContent();
        return view('cart.index',[
            "cartContent" => $cartContent
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
        //
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
     public function destroy($productId)
    {
        $user_id = Auth::user()->id;
        \Cart::session($user_id)->remove($productId);

          return back();


    }
}
