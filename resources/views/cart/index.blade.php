@extends('layouts.app2')

@section('content')
<div class="container">
    
        
    <h1 class="display-2">My Cart</h1>

   <div class="card col-md-9 mx-auto">
   	<div class="card-body ">
   		 <table class=" table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Prize</th>

      <th scope="col">Total Prize</th>
    </tr>
  </thead>
  <tbody>

  	 @foreach($cartContent as $content)

  	 <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$content->name}}</td>
      <td>
      	<form action="/cart/update/{{$content->id}}" class="row">
      		<input type="number" name="quantity" value="{{$content->id}}" class="col-3 form-control">
      		<button class="col-3 btn text-primary">Add</button>
      	</form>
      	

      </td>
      <td><span>&#8358;</span>{{$content->price}}</td>
      <td><span>&#8358;</span>

      	

      	<?php 
      		$summedPrice = Cart::get($content->id)->getPriceSum();
      	 ?>

      	 {{$summedPrice}}

      </td>
      <td>
      	<a href="/destroy/{{$content->id}}" class="btn btn-primary ">Remove</a>
      </td>
    </tr>



    @endforeach



    
   
  </tbody>

</table>

<div class="card">
	<div class="card-body">
		<h4>Total Amount:
<span>&#8358;</span>
		<?php 
			 $total = Cart::session(Auth::user()->id)->getTotal();
		 ?>
		 {{$total}}

		</h4>

		<a class="btn btn-primary" href="/">Proceed to Checkout</a>
	</div>
</div>

   	</div>


   </div>
   
   <div class="col-md-3"></div>
   
   <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    Place Order
                </div>
            </p>
            <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="3">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
</form>



   
    
</div>
@endsection
