@extends('layouts.master')
@section('title')
    Aniemeka's Shopping Cart
    @endsection
@section('content')
    @if(Session::has('success'))
    <div class="row">
     <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
         <div id="charge-message" class="alert alert-success">
       {{ Session::get('success') }}
         </div>
     </div>
    </div>
    @endif
    @foreach($products->Chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$product->imagePath}}" alt="..."
                     style="max-height: 150px" class="img-responsive">
                <div class="caption">
                    <h3>{{$product->title}}</h3>
                    <div class="description">
                        <p>
                            {{$product->description}}
                        </p>
                    </div>
                    <div class="clearfix">
                        <div class="pull-left price">&#8358; {{number_format($product->price)}}</div>
                        <p><a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to my Cart</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
        </div>
        @endforeach
    @endsection
@section('footer')
    <div id="footer" class="footer-distributed">

        <div class="footer-left">

            <p class="footer-links">
                <a href="/">Home</a>
                ·
                <a href="/about">About</a>
                ·
                <a href="/contact">Contact</a>
            </p>

            <p class="footer-company-name"><strong> &copy; 2016 by Aniemeka Mark.
                    All rights reserved. </strong></p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p>Lagos, Nigeria</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+234 8060461904</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p>marksmalz95@gmail.com</p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company:</span>
            </p>
            <p class="footer-payment-method">
                <span>PAYMENT</span> METHODS:
                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                <i class="fa fa-cc-stripe" aria-hidden="true"></i>

            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>

        </div>
    </div>
    @endsection
