@extends('layouts.app')

@section('content')

<div>
<h4>Are you sure you want to delete?</h4>
	<hr/>
	<dl class="dl-horizontal">
        <dt>
            <label class="control-label col-md-2" for="name">name</label>
        </dt>

        <dd>
            {{$user->name}}
        </dd>

        <dt>
            <label class="control-label col-md-2" for="work">work</label>
        </dt>

        <dd>
            {{$user->work}}
        </dd>

        <dt>
            <label class="control-label col-md-2" for="phone">phone</label>
        </dt>

        <dd>
            {{$user->phone}}
        </dd>

        <dt>
            <label class="control-label col-md-2" for="email">email</label>
        </dt>

        <dd>
            {{$user->email}}
        </dd>

        <dt>
            <label class="control-label col-md-2" for="twitter">twitter</label>
        </dt>

        <dd>
            {{$user->twitter}}
        </dd>

	</dl>

    <form action="/phonebook/delete/{{$user->id}}" method="post">
    {!! csrf_field() !!} 
        <a href="/phonebook">Back to list</a> |
        <input class="btn btn-default" type="submit" value="Delete">
    </form>

	
</div>
@endsection