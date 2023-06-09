@extends('layouts.front')

@section('title', $products->name)

@section('content')


<div class="py-3 mb-4 shadow-sm bg-warning border-box">
    <div class="container">
        <h6 class="mb-0"> Collections / {{ $products->category->name }} / {{ $products->name }} </h6>
    </div>
</div>


<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('assets/uploads/products/'.$products->image ) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $products->name }}
                        @if($products->trending == '1')
                            <label style="font-size: 10px;" class="float-end badge bg_danger trending_tag"> 
                        Trending </label>
                        @endif
                    </h2>

                    <hr>
                    <label class="me-3">Original price : {{ $products->original_price }}</label>
                    <label class="fw-bold">Selling price : {{ $products->selling_price }}</label>
                    <p class="mt-3">
                        { !! $products->small_description !!}
                    </p>
                    <hr>
                    @if($products->qty > 0)
                        <label class="badge bg-success">In Stock</label>
                    @else
                        <label class="badge bg-danger">Out Of Stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label for="quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement_btn">-</button>
                                <input type="text" name="quantity" value="1" class="text-center qty_input">
                                <button class="input-group-text increment_btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br/>
                            <button type="button" class="btn btn-success me-3 float-start"><i class="fa fa-heart-cart" aria-hidden="true"> Add To Wishlist</i></button>
                            <button type="button" class="btn btn-primary me-3 float-start"><i class="fa fa-shopping-cart" aria-hidden="true"> Add To Cart</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.increment_btn').click(function(e){
                e.preventDefault();
                var inc_value = $('.qty_input').val();
                var value = parseInt(inc_value, 10);
                value = isNum(value) ? 0 : value;
                if(value < 10)
                {
                    value++;
                    $('.qty_input').val(value);
                }
            });

            $('.decrement_btn').click(function(e){
                e.preventDefault();
                var dec_value = $('.qty_input').val();
                var value = parseInt(dec_value, 10);
                value = isNum(value) ? 0 : value;
                if(value > 1)
                {
                    value--;
                    $('.qty_input').val(value);
                }
            });
        });
    </script>
@endsectionb