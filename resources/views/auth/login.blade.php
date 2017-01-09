@extends('app')

@section('content')
<section class="content-wrap">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form role="form" method="POST" action="{{ url('/auth/login') }}">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					 
					  <div class="input-field">
					    <i class="fa fa-user prefix"></i>
					    <input id="username-input" type="email" name="email" value="{{ old('email') }}">
					    <label for="username-input">Email</label>
					  </div>
					 
					  <div class="input-field">
					    <i class="fa fa-unlock-alt prefix"></i>
					    <input id="password-input" type="password" name="password">
					    <label for="password-input">Password</label>
					  </div>
					  
					  <div class="right-align">
					    <a href="{{ url('/password/email') }}">Forgot Password?</a>
					  </div>
					 
					  <div class="switch">
					    <label>
					      <input type="checkbox" name="remember" checked />
					      <span class="lever"></span>
					      Keep me logged in
					    </label>
					  </div>
					 
					  <button class="waves-effect btn" type="submit">Log In</button>
					 
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
