@extends('layouts.frontend.app')

@section('title','Cart')




@section('cart')
		
	 
   <div class="container">
	 	
	 

      <div style="margin-top: 100px; background: white;" class="table-responsive cart_info">
      <table class="table table-condensed">
          <thead style="background: cyan">
            <tr class="cart_menu" style="color:black">
              <td width="20%" class="image">Item</td>
              <td width="20%" class="description">Name</td>
              <td width="15%" class="price">Price</td>
              <td width="20%" class="quantity">Quantity</td>
              <td width="15%" class="total">Total</td>
              <td width="10%">Action</td>
            </tr>
          </thead>
          <tbody style="background: firebrick;">
            
            @foreach($cart_products as $key=>$product)
            <tr>
              <td class="cart_product">
                <a href=""><img src="{{ URL::to($product->options->image) }}" width="80" height="80" alt=""></a>
              </td>
              <td>
                <p> {{ $product->name }}</p>
              </td>
              <td class="cart_price">
                <p> {{ $product->price }} TK</p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                
                  <form action="{{ route('cart.update',$product->rowId) }}" method="POST">
                    @csrf
                  <input class="cart_quantity_input" type="text" name="quantity" value=" {{ $product->qty  }}" autocomplete="off" size="2">
                  <input type="submit" value="update" class="btn btn-sm btn-info">
                  </form>
                </div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">  {{ $product->qty*$product->price }} TK</p>
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="{{ route('cart.delete',$product->rowId) }}"><i class="fas fa-trash-alt text-danger"></i></i></a>
              </td>
            </tr>
            @endforeach

             <tr>
              <td colspan="4">&nbsp;</td>
              <td colspan="2">
                <table class="table table-condensed total-result" style="background: aquamarine">
                  <tbody><tr>
                    <td>Cart Sub Total</td>
                    <td>{{ Cart::subtotal() }} TK</td>
                  </tr>
                  <tr>
                    <td>Exo Tax</td>
                    <td>{{ Cart::tax() }} TK</td>
                  </tr>
                  <tr class="shipping-cost">
                    <td>Shipping Cost</td>
                    <td>50.00 TK</td>                   
                  </tr>
                  <tr>
                  	
                    @php
                      $customer_id = Session::get('customer_id');
                    @endphp

                    <td>Total</td>
                    <td><span>{{ Cart::total() }} TK</span></td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="container">
    <div class="payment-options text-center" style="padding-top: 60px;background: blue; padding-bottom: 50px;">
          <h2>Select Your Payment System</h2>
          <form action="{{ route('order.place') }}" method="POST">
            @csrf
          <span>
            <label><input type="radio" value="handcash" name="payment_gateway">HandCash</label>
          </span>
          {{-- <span>
            <label><input type="radio" value="bkash" name="payment_gateway"> Bkash</label>
          </span> --}}
          <br><br>
          <input type="submit" value="Done" class="btn btn-success">
          </form>
        </div>
      </div>

@endsection