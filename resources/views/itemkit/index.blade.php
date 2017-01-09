@extends('app')

@section('content')
<section class="content-wrap">
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-panel deep-purple accent-4 white-text">Item Kits</div>

				<div class="panel-body">
    				<a class="waves-effect waves-blue btn blue" href="{{ URL::to('item-kits/create') }}">
                    Create New</a>
    				<hr />
                    @if (Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Item Kit</td>
                                <td>Item Kit Name</td>
                                <td>Cost Price</td>
                                <td>Selling Price</td>
                                <td>Item Kit Description</td>
                                <td>&nbsp;</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($itemkits as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->item_name}}</td>
                                <td>{{$value->cost_price}}</td>
                                <td>{{$value->selling_price}}</td>
                                <td>{{$value->description}}</td>
                                <td>..</td>
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