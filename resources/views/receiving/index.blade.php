@extends('app')

@section('content')
<section class="content-wrap">
   <div class="row">
        <div class="col s12 ">
            <div class="card">
                <div class="card-panel red white-text"><span class="glyphicon glyphicon-inbox"></span> Recieving Item</div>

                <div class="card-content">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    {!! Html::ul($errors->all()) !!}

                    <div class="row">
                        <div class="col s3">
                            <label>Recieving search item<input class="form-control"></label>

                            <table class="table table-hover">
                                <tr>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary btn-xs" type="button">
                                    <i class="fa fa-paper-plane"></i>
                                    </button>
                                </td>
                                </tr>
                            </table>
                        </div>

                        <div class="col s9">

                            <div class="row">

                                {!! Form::open(array('url' => 'receivings', 'class' => 'form-horizontal')) !!}
                                    <div class="col s5">
                                        <div class="row">
                                            <div class="input-field s12">
                                                <div class="col s3">
                                                    <label for="invoice">Invoice</label>
                                                </div>
                                                <div class="col s9">
                                                    <input type="text" disabled class="form-control" 
                                                    id="invoice" value="@if ($receiving) {{$receiving->id + 1}} @else 1 @endif" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field s12">
                                                <div class="col s3">
                                                    <label for="employee">Employee</label>
                                                </div>
                                                <div class="col s9">
                                                    <input type="text" disabled class="form-control" name="employee_id" id="employee" value="{{ Auth::user()->name }}" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s7">
                                        <div class="row">
                                            <div class="input-field">
                                                <div class="col s12">
                                                    <div class="col s4">
                                                        <label for="supplier_id">Supplier</label>
                                                    </div>
                                                    <div class="col s8">
                                                        {!! Form::select('supplier_id', $supplier, null, array('class' => 'form-control')) !!}
                                                    </div>
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
                                    <th>Cost</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>&nbsp;</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <input type="text" style="text-align:center" autocomplete="off" name="quantity" size="2">
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn red" type="button">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                    </td>
                                </tr>
                            </table>

                            <div class="row">
                                <div class="col s7">
                                    <div class="row">
                                        <div class="s12">
                                            <div class="col s5">
                                                <label for="amount_tendered">Amount Tendered: </label>
                                            </div>
                                            <div class="col s7">
                                                <div class="input-field">
                                                    <div class="input-group-addon">$</div>
                                                    <input type="text" class="form-control" 
                                                    id="amount_tendered"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row">
                                        <div class="s12">
                                            <div class="col s5">
                                                <label for="comments">Comments: </label>
                                            </div>
                                            <div class="col s7">
                                                <div class="input-field">
                                                    <input type="text" class="form-control" name="comments" 
                                            id="comments" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s5">
                                    <div class="row">
                                        <div class="input-field s12">
                                            <div class="col s4">
                                                <label>Total: </label>
                                            </div>
                                            <div class="col s8">
                                                <p class="form-control-static"><b></b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>&nbsp;</div>
                                    <div class="row">
                                        <div class="input-field s12">
                                            <div class="col s4">
                                                <label>Total: </label>
                                            </div>
                                            <div class="col s8">
                                                <p class="form-control-static"><b></b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 40px;">
                                        <div class="s12">
                                            <div class="col s12">
                                                <button type="submit" class="waves-effect btn black">Finish Recieving</button>
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
