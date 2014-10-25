@extends('layouts._master')

@section('javascript-modules')
<script src='{{ asset('js/controllers/ngCtrl.js') }}'></script>
@stop

@section('title')
User Generator
@stop

@section('content')
<div class='container-fluid' ng-controller='NgCtrl'>
  <form name='form'>
        <div class='form-group' ng-class='{"has-error": form.qty.$invalid, "has-success": form.qty.$valid}'>
          <label class='control-label' for='paragraphs'>Number of Users:(Max 99)</label>
          <input type='number' name='qty' class='form-control' placeholder='Input.....' ng-model='qty'
            min='1' max='99' required style='width:200px'>
          <span class='error' ng-show='form.qty.$invalid'>Input should be a valid number, range from 1 to 99.</span>
        </div>
        <label>Options:</label>
        <div class='form-group' ng-class='{"has-error": form.birthday.$invalid, "has-success": form.birthday.$valid}'>
          <label class='control-label' for='birthday'>
            <input type='checkbox' name='birthday' ng-model='hasBirthday'>Include a Birthday
          </label>
        </div>
        <div class='form-group' ng-class='{"has-error": form.profile.$invalid, "has-success": form.profile.$valid}'>
          <label class='control-label' for='birthday'>
            <input type='checkbox' name='profile' ng-model='hasProfile'>Include a Profile
          </label>
        </div>
        <div>
          <button class='btn btn-lg btn-danger' ng-disabled='form.$invalid' ng-click='generate()'>Generate</button>
        </div>
    </form>
    <hr>
    <div>
      <table class='table table-striped table-bordered table-hover' ng-show='users.length > 0'>
        <thead>
          <tr class='info'>
            <th>Name</th>
            <th ng-show='hasBirthday'>Birthday</th>
            <th ng-show='hasProfile'>Profile</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat='user in users track by $index'>
            <td><%user.name%></td>
            <td ng-show='hasBirthday'><%user.birthday%></td>
            <td ng-show='hasProfile'><%user.profile%></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
@stop