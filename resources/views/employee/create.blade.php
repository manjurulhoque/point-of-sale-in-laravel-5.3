@extends('app')

@section('content')
<section class="content-wrap">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Create New Employee</div>
				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::open(array('url' => 'employees')) !!}

					<div class="input-field">
					{!! Form::label('name', 'Employee name'.' *') !!}
					{!! Form::text('name', null, array('class' => 'validate')) !!}
					</div>

					<div class="input-field">
					{!! Form::label('email', 'Employee email'.' *') !!}
					{!! Form::text('email', null, array('class' => 'validate')) !!}
					</div>

					<div class="input-field">
					{!! Form::label('password', 'Password'.' *') !!}
					<input type="password" class="validate" name="password">
					</div>

					<div class="input-field">
					{!! Form::label('password_confirmation', 'Confirmation password'.' *') !!}
					<input type="password" class="form-control" name="password_confirmation">
					</div>

					{!! Form::submit('Submit', array('class' => 'waves-effect waves-light btn pink')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection