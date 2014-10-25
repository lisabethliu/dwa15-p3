@extends('layouts._master')

@section('javascript-modules')
<script src='{{ asset('js/controllers/ligCtrl.js') }}'></script>
@stop

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
<div class='container-fluid' ng-controller='LigCtrl'>
  <form name='form' class='form-inline'>
      <div class='form-group' ng-class='{"has-error": form.paragraphs.$invalid, "has-success": form.paragraphs.$valid}'>
        <label class='control-label' for='paragraphs'>Paragraphs# (Max 99)</label>
        <input type='number' name='paragraphs' class='form-control' placeholder='Input.....' ng-model='paragraphs'
          min='1' max='99' required>
        <span class='error' ng-show='form.paragraphs.$invalid'>Input should be a valid number, range from 1 to 99.</span>
      </div>
      <div>
        <button class='btn btn-default' ng-disabled='form.$invalid' ng-click='generate()'>Generate</button>
      </div>
  </form>
  <div ng-repeat='text in texts'>
    <div class='lead'><%text%></div>
  </div>
</div>
@stop