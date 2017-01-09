@extends('app')

@section('content')
<section class="content-wrap">
	<div class="row">
		<div class="col s12">
			<div class="panel panel-default">
				<div class="panel-heading">New Supplier</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::open(array('url' => 'suppliers', 'files' => true)) !!}

					<div class="input-field">
					{!! Form::label('company_name', 'Company name'.' *') !!}
					{!! Form::text('company_name', null, array('class' => 'validate')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('name', 'Name') !!}
					{!! Form::text('name', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('phone_number', 'Phone number') !!}
					{!! Form::text('phone_number', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('avatar', 'User Avatar') !!}
					{!! Form::file('avatar', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('address', 'Address') !!}
					{!! Form::text('address', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('city', 'City') !!}
					{!! Form::text('city', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('state', 'State') !!}
					{!! Form::text('state', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('zip', 'Zip code') !!}
					{!! Form::text('zip', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('comments', 'Comments') !!}
					{!! Form::text('comments', null, array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('account', 'Account'.' #') !!}
					{!! Form::text('account', null, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection