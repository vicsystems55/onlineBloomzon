@extends('layouts.app2')

@section('content')

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Bloomzon Products</h1>
                    </div>
                </div>
                <div class="row">

                    @foreach($products as $product)

                    <div class="col-md-3 mb-3 p-3">
                        <div class="p-3">
                            <div class="row bg-white p-5" style="height: 280px;">
                                <img src="asset/img/bag.png" width="100%">
                            </div>
                            <div style="margin-top: -25px;" class="text-right">
                                <a href="/add-to-cart/{{$product->id}}" class="btn btn-danger btn-sm">Add to cart</a>
                            </div>
                        </div>
                    </div>


                    @endforeach
                    
                    
                    
                    
                </div>
            

            @endsection
