@extends('layouts.app')
@section('content')

<div class="container">
	<form action="{{url('voucher/create')}}" method="post">
    

	<div class="form-horizontal">
        <hr>
        
        <div class="form-group">
            <label class="control-label col-md-2" for="customerName">name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="customerName" name="customerName" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="customerName" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="customerEmail">Email</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-email="The email field is not a valid e-mail address." id="customerEmail" name="customerEmail" type="email" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="customerEmail" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="voucherId">Voucher ID</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="voucherId" name="voucherId" type="text" value="" readonly="">
                <span class="field-validation-valid text-danger" data-valmsg-for="voucherId" data-valmsg-replace="true"></span>
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Add Customer" class="btn btn-default">
            </div>
        </div>
    </div>
    {!! csrf_field() !!} 
</form>
</div>

@endsection