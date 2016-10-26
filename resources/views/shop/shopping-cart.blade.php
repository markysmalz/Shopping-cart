@extends('layouts.master')
@section('title')
    Aniemeka's Shopping Cart
@endsection
@section('content')
    <h1>
        <center>
           <strong>MY SHOPPING CART.</strong>
        </center>
    </h1>
    @if(Session::has('cart'))
               @foreach($products as $product)
                   <table class="table">
                       <style>
                           table {
                               font-family: arial, sans-serif;
                               border-collapse: collapse;
                               width: 80%;
                           }

                           td, th {
                               border: 1px solid #dddddd;
                               text-align: center;
                               padding: 8px;
                           }

                           tr:nth-child(even) {
                               background-color: #dddddd;
                           }
                       </style>
                       <tr>
                           <th>Qty</th>
                           <th>Title</th>
                           <th>Price</th>
                           <th>Action</th>
                       </tr>

                       <tr>
                       <td><span class="badge">{{$product['qty']}}</span></td>
                       <td><strong>{{ $product['item']['title'] }}</strong></td>
                      <td><span class="label label-success">&#8358; {{$product ['price']}}</span></td>
                      <td>
                       <div class="btn-group">
                           <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                       <ul class="dropdown-menu">
                           <li><a href="#">Reduce by 1</a></li>
                           <li><a href="#">Reduce All</a></li>
                       </ul>
                       </div>
                           </td>
                       </tr>
                   </table>
                   @endforeach
   <div class="row">
       <div class="col-sm-6 col-sm-6 col-sm-offset-3 col-sm-offset-3">
           <strong>Total: &#8358; {{$totalPrice}}</strong>
       </div>
   </div>
   <div class="row">
       <div class="col-sm-6 col-sm-6 col-sm-offset-3 col-sm-offset-3">
           <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout </a>
       </div>
   </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-sm-6 col-sm-offset-3 col-sm-offset-3">
                <h2>No item in the Cart!</h2>
            </div>
        </div>
    @endif
    @endsection