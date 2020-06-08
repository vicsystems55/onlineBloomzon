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



   
    
</div>
@endsection
