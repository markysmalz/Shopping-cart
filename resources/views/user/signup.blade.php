@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1><i class="fa fa-user-plus" aria-hidden="true"></i>Sign Up</h1>
        @if(count($errors)> 0)
        <div class="alert alert-danger">
            @foreach($error->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <form action="/signup" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <button type="submit" class="btn btn-success">Sign Up</button>
            <button type="reset" class="btn btn-primary">Reset</button>


        </form>
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
</div>
            @endif
            </div>
</div>
    @endsection