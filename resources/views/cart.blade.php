@extends('layouts.app')
@section('content')
    

    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>&nbsp;</th>
                </tr>
                <tr v-for="item in cartItems">
                <td>
                    <div class="media">
                        <img style="width: 64px; height: 64px" class="mr-3 img-thumbnail" src="{{url('/img/844.jpg')}}" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">${item.message}</h5>

                        </div>
                    </div>
                </td>
                <td><strong>${item.qty}</strong></td>
                <td><strong>${item.nprice}</strong></td>
                <td><strong>${(item.qty*item.nprice).toFixed(2)}</strong></td>
                <td>
                  <div v-if="item.qty>0" class="btn-group" role="group" aria-label="Basic example">
                        <button v-if="item.qty==1" type="button" class="btn btn-secondary" v-on:click="decreaseOrder(item)"><i class="fas fa-trash-alt"></i></button>
                        <button v-if="item.qty>1" type="button" class="btn btn-secondary" v-on:click="decreaseOrder(item)"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-secondary">${ item.qty} </button>
                        <button type="button" class="btn btn-secondary" v-on:click="increaseOrder(item)"><i class="fa fa-plus"></i></button>
                    </div>
                </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  
                  <td><h5><strong>Subtotal</strong></h5></td>
                  <td  class="text-right"><h5><strong>${returnCartTotal}</strong></h5></td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  
                  <td><h5><strong>Shipping</strong></h5></td>
                  <td  class="text-right"><h5><strong>50.00</strong></h5></td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  
                  <td><h3><strong>Total</strong></h3></td>
                  <td  class="text-right"><h3><strong>${(cartTotal+50).toFixed(2)}</strong></h3></td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <button type="button" class="btn btn-primary">Checkout</button>
                  </td>
                </tr>
            </table>

        </div>

     

    </div>
@endsection