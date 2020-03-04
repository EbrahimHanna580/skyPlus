<<<<<<< HEAD
@extends('errors.layout')

@php
	$error_number = 500;
@endphp

@section('title')
	It's not you, it's me.
@endsection

@section('description')
	@php
	  $default_error_message = "An internal server error has occurred. If the error persists please contact the development team.";
	@endphp
	{!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
=======
@extends('errors.layout')

@php
	$error_number = 500;
@endphp

@section('title')
	It's not you, it's me.
@endsection

@section('description')
	@php
	  $default_error_message = "An internal server error has occurred. If the error persists please contact the development team.";
	@endphp
	{!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
@endsection