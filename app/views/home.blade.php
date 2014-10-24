@extends('layouts._master')

@section('title')
Welcome to Developer's Best Friend
@stop

@section('content')
<div class='container-fluid'>
  <div class='well'>
    <fieldset>
      <h3>Lorem Ipsum Generator</h3>
      <p class='lead'>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</p>
    </fieldset>
    <div>
      <div>
        <label>Create random filler text for your applications.</label>
      </div>
      <a class='btn btn-link' href='lorem-ipsum'>Generate some text....</a>
    </div>
  </div>
  <div class='well'>
      <fieldset>
        <h3>Random User Generator</h3>
      </fieldset>
      <div>
        <div>
          <label>Create random user data for your applications. Like Lorem Ipsum, but for people.</label>
        </div>
        <a class='btn btn-link' href='user-generator'>Generate some users....</a>
      </div>
    </div>
</div>
@stop