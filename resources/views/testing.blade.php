@extends('layouts.app')
@section('content')

<div class="container">
	<form  method="post">
    

	<div class="form-horizontal">
        <hr>
        
        <div class="form-group">
            <label class="control-label col-md-2" for="value1">value1</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="value1" name="firstValue" type="number" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="value1" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="value2">value2</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-email="The email field is not a valid e-mail address." id="value2" name="secondValue" type="number" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="value2" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="result">result</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="result" name="Result" type="number" value="<?php echo @$result; ?>" readonly="">
                <span class="field-validation-valid text-danger" data-valmsg-for="result" data-valmsg-replace="true"></span>
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