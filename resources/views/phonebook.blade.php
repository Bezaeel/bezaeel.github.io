@extends('layouts.app')

@section('content')
<div class="container body-content">
	<p>
		<a href="phonebook/create">Create</a>
	</p>

	<table class="table">
	    <tr>
	        <th>
	            name
	        </th>
	        <th>
	            work
	        </th>
	        <th>
	            phone
	        </th>
	        <th>
	            email
	        </th>
	        <th>
	            twitter
	        </th>
	    </tr>
	    @foreach($user as $users)
		    <tr>
		        <td>
		            {{$users->name}}
		        </td>
		        <td>
		            {{$users->work}}
		        </td>
		        <td>
		            {{$users->phone}}
		        </td>
		        <td>
		            <a href="mailto:talabi.rotimi@hotmail.com">{{$users->email}}</a>
		        </td>
		        <td>
		            {{$users->twitter}}
		        </td>
		        <td>
		            <a href="phonebook/edit/{{$users->id}}">Edit</a> |
		            <a href="phonebook/details/{{$users->id}}">Details</a> |
		            <a href="phonebook/delete/{{$users->id}}">Delete</a>
		        </td>
		    </tr>
		@endforeach


	</table>
</div>
@endsection