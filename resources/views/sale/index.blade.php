@extends('app')

@section('content')
<section class="content-wrap">
   <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-panel blue lighten-1 white-text"><span class="glyphicon glyphicon-inbox">
                    
                </span>Sales Register</div>

                <div class="card-content">

                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    {!! Html::ul($errors->all()) !!}

                    <div class="row">

                        <div class="col s3">
                            <label>Search Item</label>
                            <input class="input-field"/>

                            <table class="table table-hover">
                            @foreach($items_name as $value)
                                <tr>
                                    <td>{{$value}}</td>
                                    <td>
                                        <button class="btn red" type="button"><i class="fa fa-paper-plane"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>

                        <div class="col s9">

                            <div class="row">

                                {!! Form::open(array('url' => 'sales', 'class' => 'form-horizontal')) !!}
                                    <div class="col s5">
                                        <div class="row">
                                            <div class="input-field s12">
                                                <div class="col s3">
                                                    <label for="invoice">Invoice</label>
                                                </div>
                                                <div class="col s9">
                                                    <input type="text" disabled class="form-control" id="invoice" value="@if ($sale) {{$sale->id + 1}} @else 1 @endif" readonly/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field s12">
                                                <div class="col s3">
                                                    <label for="employee">Employee</label>
                                                </div>
                                                
                                                <div class="col s9">
                                                    <input type="text" disabled class="form-control" id="employee" value="{{ Auth::user()->name }}" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s7">
                                        <div class="row">
                                            <div class="input-field s12">
                                                <div class="col s4">
                                                    <label for="customer_id">Customer</label>
                                                </div>
                                                <div class="col s8">
                                                    {!! Form::select('customer_id', $customer, null, array('class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field s12">
                                                <div class="col s4">
                                                    <label for="payment_type">Payment type</label>
                                                </div>
                                                <div class="col s8">
                                                    {!! Form::select('payment_type', array('Cash' => 'Cash', 'Check' => 'Check', 'Debit Card' => 'Debit Card', 'Credit Card' => 'Credit Card'), null, array('class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <table class="table table-bordered">
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>&nbsp;</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <input type="text" style="text-align:center" autocomplete="off" name="quantity"size="2"></td>
                                    <td></td>
                                    <td>
                                        <button class="btn light-blue accent-4" type="button">
                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                </tr>
                            </table>

                            <div class="row">
                                <div class="col s6">
                                    <div class="row">
                                        <div class="input-field s12">
                                            <div class="col s4">
                                                <label for="total">Add Payment</label>
                                            </div>
                                            <div class="col s8">
                                                <div class="input-group">
                                                    <i class="fa fa-dollar prefix"></i>
                                                    <input type="text" class="form-control" 
                                                    id="add_payment"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row">
                                        <div class="input-field s12">
                                            <div class="col s4">
                                                <label for="employee">Comments</label>
                                            </div>
                                            <div class="col s8">
                                                <input type="text" class="form-control" name="comments" 
                                                id="comments" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="row">
                                        <div class="s12">
                                            <div class="col s4">
                                                <label for="supplier_id">TOTAL:</label>
                                            </div>
                                            <div class="col s8">
                                                <p class="form-control-static"><b></b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="s12">
                                            <div class="col s4">
                                                <label for="amount_due">Amount due:</label>
                                            </div>
                                            <div class="col s8">
                                                <p class="form-control-static"></p>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <div class="s12">
                                            <div class="col s12">
                                                <button type="submit" class="waves-effect btn teal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
