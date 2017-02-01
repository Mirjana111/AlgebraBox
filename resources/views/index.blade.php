
@extends('layouts.index')



@section('title', 'AlgebraBox | The greatest cloud storage')



@section('content')
<<<<<<< HEAD

<div class="row">

    <div class="jumbotron" style="text-align: center;

">

<img src="{!!asset('images/Algebra-BOX-logo.png')!!}"/>

        <h1>AlgebraBox</h1>

        <h2>The greatest cloud storage</h2>

        <p>You must login or create account to continue.</p>

        <p class="login-btn">

          <a class="btn background-green" href="{{ route('auth.login.form') }}" role="button">Log In</a>

          <a class="btn background-blue" href="{{ route('auth.register.form') }}" role="button">Create account</a>

        </p>

  </div>

</div>


  

@stop
=======
	
		<div class="login-row">
			<div class="login">
				<img src="{!!asset('images/algebra-logo.svg')!!}"/>
				<h1>AlgebraBox</h1>
				<h2>The greatest cloud storage</h2>
				<h3>You must login or create account to continue.</h3>
				<p class="login-btn flat-btn">
				  <a class="btn background-green" href="{{ route('auth.login.form') }}" role="button">Log In</a>
				</p>
				<p class="login-btn flat-btn">
				  <a class="btn background-blue" href="{{ route('auth.register.form') }}" role="button">Create account</a>
				</p>
		  </div>
		</div>
		
@stop
>>>>>>> 00dce274d92839346cb8daa02bd893f256958b7e
