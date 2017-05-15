@extends('layouts.app')

@section('content')

<div class="container body-content">
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

	<a href="/phonebook">Back to list</a> |
	<a href="/phonebook/edit/{{$user->id}}">Edit</a>
</div>
@endsection