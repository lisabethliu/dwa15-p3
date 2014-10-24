@extends('layouts._master')

@section('javascript-modules')
<script src='{{ asset('js/controllers/ngCtrl.js') }}'></script>
@stop

@section('title')
User Generator
@stop

@section('content')
<div class='container-fluid' ng-controller='NgCtrl'>
  <form name='form' class='form-inline'>
        <div class='form-group' ng-class='{"has-error": form.qty.$invalid, "has-success": form.qty.$valid}'>
          <label class='control-label' for='paragraphs'>Quantity# (Max 99)</label>
          <input type='number' name='qty' class='form-control' placeholder='Input.....' ng-model='qty'
            min='1' max='99' required>
          <span class='error' ng-show='form.qty.$invalid'>Input should be a valid number, range from 1 to 99.</span>
        </div>
        <div class='form-group' ng-class='{"has-error": form.birthday.$invalid, "has-success": form.birthday.$valid}'>
          <label class='control-label' for='birthday'>
            <input type='checkbox' name='birthday' ng-model='hasBirthday'>Has Birthday
          </label>
        </div>
        <div class='form-group' ng-class='{"has-error": form.profile.$invalid, "has-success": form.profile.$valid}'>
          <label class='control-label' for='birthday'>
            <input type='checkbox' name='profile' ng-model='hasProfile'>Has Birthday
          </label>
        </div>
        <div>
          <button class='btn btn-default' ng-disabled='form.$invalid' ng-click='generate()'>Generate</button>
        </div>
    </form>
    <div >
      <table class='table' ng-show='users.length > 0'>
        <thead>
          <tr>
            <td>Name</td>
            <td ng-show='hasBirthday'>Birthday</td>
            <td ng-show='hasProfile'>Profile</td>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat='user in users'>
            <td><%user.name%></td>
            <td ng-show='hasBirthday'><%user.birthday%></td>
            <td ng-show='hasProfile'><%user.profile%></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
@stop