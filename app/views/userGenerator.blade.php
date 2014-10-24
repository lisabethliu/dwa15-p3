@extends('layouts._master')

@section('javascript-modules')
<script src='{{ asset('js/controllers/ngCtrl.js') }}'></script>
@stop

@section('title')
User Generator
@stop

@section('content')
<div class='container-fluid'>
  User Generator
</div>
@stop