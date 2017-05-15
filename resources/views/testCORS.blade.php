@extends('layouts.app')

@section('content')

<a href="#" onclick="makeCorsRequest(); return false;">test CORS</a>

<script type="text/javascript" src="{{asset('assets/cors.js')}}"></script>
@endsection