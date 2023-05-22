@extends('layouts.front')

@section('title')
    Welcome To E-Shop
@endsection

@section('content')
    @include('layouts.inc.slider');
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel feature-carousel owl-theme">
                    @foreach($feature_products as $product)
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/products/'.$product->image ) }}" alt="Product Image">
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <span class="float-start">{{ $product->selling_price }}</span>
                                <span class="float-end"> <s>{{ $product->original_price }}</s></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> 
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Categories</h2>
                <div class="owl-carousel feature-carousel owl-theme">
                    @foreach($trending_category as $trend)
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/category/'.$trend->image ) }}" alt="Product Image">
                            <div class="card-body">
                                <h5>{{ $trend->name }}</h5>
                                <p>{{ $trend->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> 
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('.feature-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    </script>
@endsection