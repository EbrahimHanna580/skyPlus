<<<<<<< HEAD
@extends('errors.layout')

@php
  $error_number = 429;
@endphp

@section('title')
  Too many requests.
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> and try again, or return to <a href='".url('')."'>our homepage</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
=======
@extends('errors.layout')

@php
  $error_number = 429;
@endphp

@section('title')
  Too many requests.
@endsection

@section('description')
  @php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> and try again, or return to <a href='".url('')."'>our homepage</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
@endsection