@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/page">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Add new page</strong>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Save</button>
          <a href="/page" class="btn btn-default">Back to list</a>
        </div>
      </div>
      <hr>

      @include('page.form')
    </form>

  </div>
@endsection
