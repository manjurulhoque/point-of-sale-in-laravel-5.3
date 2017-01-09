@extends('app')

@section('stylesheet')

<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.toastr.min.css') }}">

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.toastr.min.js') }}"></script>
@endsection

@section('content')
<section class="content-wrap">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Employee List</div>

				<div class="panel-body">
    				<a class="waves-effect waves-light btn yellow" href="{{ URL::to('employees/create') }}">Create</a>
    				<hr />
                    @if (Session::has('message'))
                    	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                        {{ Session::get('message') }}</p>
                        
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>{{trans('employee.person_id')}}</td>
                                <td>{{trans('employee.name')}}</td>
                                <td>{{trans('employee.email')}}</td>
                                <td>&nbsp;</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>

                                    <a class="waves-effect waves-light btn" href="{{ URL::to('employees/' . $value->id . '/edit') }}">Edit</a>
                                    {!! Form::open(array('url' => 'employees/' . $value->id, 'class' => 'pull-right')) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('Delete', array('class' => 'waves-effect waves-light btn red')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection