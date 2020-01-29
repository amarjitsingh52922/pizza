@extends('layouts.app')
@section('content')
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="container">
    <div class="row">

        <div class="col mb-4" v-if="cartTotal>0">
            <a class="btn btn-secondary float-right" href="{{ route('cart') }}">${returnCartTotal}</a>
            
        </div>
     </div>

        <div class="row row-cols-1 row-cols-md-3">
            
            <div  v-for="item in items" class="col mb-4">
                <div class="card">
                    <img src="{{url('/img/844.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="far fa-dot-circle text-danger"></i>
                            
                            
                            ${ item.message }
                            <span class="float-right">${item.nprice}</span>
                        </h5>
                        <p class="card-text">
                            
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>

                    </div>
                    <div class="card-footer">
                        
                    
                    <div v-if="item.qty>0" class="btn-group float-right" role="group" aria-label="Basic example">
                        <button v-if="item.qty==1" type="button" class="btn btn-secondary" v-on:click="decreaseOrder(item)"><i class="fas fa-trash-alt"></i></button>
                        <button v-if="item.qty>1" type="button" class="btn btn-secondary" v-on:click="decreaseOrder(item)"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-secondary">${ item.qty} </button>
                        <button type="button" class="btn btn-secondary" v-on:click="increaseOrder(item)"><i class="fa fa-plus"></i></button>
                    </div>
                    <div v-if="item.qty==0" class="float-right">
                      <button type="button" class="btn btn-secondary" v-on:click="addToCart(item)">Add to Cart</button>
                    </div>

                    </div>
                </div>
            </div>

            

        </div>

    </div>
@endsection