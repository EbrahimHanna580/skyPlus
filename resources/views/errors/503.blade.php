<<<<<<< HEAD
@extends('errors.layout')

@php
  $error_number = 503;
@endphp

@section('title')
  It's not you, it's me.
@endsection

@section('description')
  @php
    $default_error_message = "The server is overloaded or down for maintenance. Please try again later.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection
=======
@extends('errors.layout')

@php
  $error_number = 503;
@endphp

@section('title')
  It's not you, it's me.
@endsection

@section('description')
  @php
    $default_error_message = "The server is overloaded or down for maintenance. Please try again later.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
