@extends('layouts.app')

@section('content')

  <div class="container">

    <h2>{{ $page->title }}</h2>

    <div>
      Posted by {{ $page->name }}
      <time class="timeago" datetime="{{ $page->updated_at->toIso8601String() }}"
            title="{{ $page->updated_at->toDayDateTimeString() }}">
        {{ $page->updated_at->diffForHumans() }}
      </time>
    </div>

    <hr>

    <div>
      {!! $page->content !!}
    </div>

  </div>

@endsection
