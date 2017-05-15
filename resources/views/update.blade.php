@extends('layouts.app')

@section('content')

<div class="container">
	<form action="/phonebook/update/{{$user->id}}" method="post">
	<input type="hidden" name="_method" value="PATCH">
    

	<div class="form-horizontal">
        <hr>
        
        <div class="form-group">
            <label class="control-label col-md-2" for="name">name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="name" name="name" type="text" value="{{$user->name}}">
                <span class="field-validation-valid text-danger" data-valmsg-for="name" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="work">work</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="work" name="work" type="text" value="{{$user->work}}">
                <span class="field-validation-valid text-danger" data-valmsg-for="work" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="phone">phone</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="phone" name="phone" type="text" value="{{$user->phone}}">
                <span class="field-validation-valid text-danger" data-valmsg-for="phone" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="email">email</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-email="The email field is not a valid e-mail address." id="email" name="email" type="email" value="{{$user->email}}">
                <span class="field-validation-valid text-danger" data-valmsg-for="email" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="twitter">twitter</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="twitter" name="twitter" type="text" value="{{$user->twitter}}">
                <span class="field-validation-valid text-danger" data-valmsg-for="twitter" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Save" class="btn btn-default">
            </div>
        </div>
    </div>
    {!! csrf_field() !!} 
</form>

<a href="/phonebook">Back to list</a>
</div>

<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.unobtrusive.min.js')}}"></script>
@endsection