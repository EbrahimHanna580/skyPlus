<<<<<<< HEAD
@extends('errors.layout')

@php
  $error_number = 408;
@endphp

@section('title')
  Request timeout.
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a>, refresh the page and tru again.";

  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
=======
@extends('errors.layout')

@php
  $error_number = 408;
@endphp

@section('title')
  Request timeout.
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a>, refresh the page and tru again.";

  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
@endsection