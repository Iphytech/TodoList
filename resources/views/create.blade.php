@extends('layout.app')

@section('content')

<h1>Create Todo </h1>

{!! Form::open(['actions' => 'contact/submit', 'method' => 'post']) !!}
{{ Form::bsText('text') }}
{!! Form::close() !!}

@endsection