@extends('app')

@section('content')
<section class="content-wrap">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">New Customer</div>
					<div class="panel-body">
						{!! Html::ul($errors->all()) !!}

						{!! Form::open(array('url' => 'customers', 'files' => true)) !!}
						{{csrf_field()}}
						<div class="input-field">
						{!! Form::text('name', null, array('class' => 'validate', 'id' => 'input_text')) !!}
						{!! Form::label('input_text', 'Customer Name' .' *') !!}
						</div>

						<div class="input-field">
						{!! Form::label('email', 'Customer Email') !!}
						{!! Form::text('email', null, array('class' => 'validate')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('phone_number', trans('customer.phone_number')) !!}
						{!! Form::text('phone_number', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('avatar', trans('customer.choose_avatar')) !!}
						{!! Form::file('avatar', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('address', trans('customer.address')) !!}
						{!! Form::text('address', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('city', trans('customer.city')) !!}
						{!! Form::text('city', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('state', trans('customer.state')) !!}
						{!! Form::text('state', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('zip', trans('customer.zip')) !!}
						{!! Form::text('zip', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('company_name', trans('customer.company_name')) !!}
						{!! Form::text('company_name', null, array('class' => 'form-control')) !!}
						</div>

						<div class="form-group">
						{!! Form::label('account', trans('customer.account') .' #') !!}
						{!! Form::text('account', null, array('class' => 'form-control')) !!}
						</div>

						{!! Form::submit(trans('customer.submit'), array('class' => 'btn btn-primary')) !!}

						{!! Form::close() !!}
					</div>
			</div>
		</div>
	</div>
</section>
@endsection