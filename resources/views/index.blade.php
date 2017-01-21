@extends('layouts.index')

@section('title', 'Utrka | Šibenski Maraton')

@section('content')
<div class="row">
    <div class="jumbotron" style="text-align: center;
">
<img src="{!!asset('images/Sibenik-Marathon-logo.png')!!}"/>
        <h1 style="color:green;">Šibenik Marathon</h1>
        <h2 style="color:blue">Hrvatski Maraton na moru i rijeci / Croatian Sea and River Marathon </h2>
        <p>You must login or create account to continue.</p>
        <p>
          <a class="btn btn-primary btn-lg" href="{{ route('auth.login.form') }}" role="button">Log In</a>
          <a class="btn btn-primary btn-lg" href="{{ route('auth.register.form') }}" role="button">Create account</a>
        </p>
  </div>
</div>
@stop
