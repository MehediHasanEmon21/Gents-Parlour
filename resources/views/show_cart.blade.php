@extends('layouts.frontend.app')

@section('title','Cart')

<style type="text/css">
  .new i {
    color: white;
  }
</style>



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
            <tr style="color: white;">
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
                <a class="cart_quantity_delete new"href="{{ route('cart.delete',$product->rowId) }}"><i class="fas fa-trash-alt text-danger"></i></i></a>
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
                    <td>00.00 TK</td>                   
                  </tr>
                  <tr>
                  	
                    @php
                      $customer_id = Session::get('customer_id');
                      $shipping_id = Session::get('shipping_id');
                      $cart_count = Cart::count();
                    @endphp

                    <td>Total</td>
                    <td><span>{{ Cart::total() }} TK</span></td>
                  </tr>
                </tbody></table>
                <div>
                  <a href="{{ route('product.index') }}" class="btn btn-lg btn-warning" style="color: white;font-size: 15px">Shooping</a>

                  @if($customer_id != NULL && $shipping_id != NULL)
                  <a href="{{ route('payment.index') }}" class="btn btn-lg btn-success" style="color: white;font-size: 15px">Checkout</a>
                  @elseif($customer_id != NULL )
                    <a href="{{ route('checkout.index') }}" class="btn btn-lg btn-success" style="color: white;font-size: 15px">Checkout</a>
                  @else
                   <a href="{{ route('login.index') }}" class="btn btn-lg btn-success" style="color: white;font-size: 15px">Checkout</a>
                  @endif
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

@endsection