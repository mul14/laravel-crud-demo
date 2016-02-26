{!! csrf_field() !!}

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">

  <label for="url" class="control-label">
    {{ trans('url') }}
  </label>

  <input type="url"
         name="url"
         id="url"
         value="{{ old('url', @$page->url) }}"
         placeholder="url"
         required
         class="form-control">

  @if ($errors->has('url'))
    <div class="help-block">
      {{ $errors->first('url') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

  <label for="name" class="control-label">
    {{ trans('name') }}
  </label>

  <input type="text"
         name="name"
         id="name"
         value="{{ old('name', @$page->name) }}"
         placeholder="name"
         required
         class="form-control">

  @if ($errors->has('name'))
    <div class="help-block">
      {{ $errors->first('name') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

  <label for="title" class="control-label">
    {{ trans('title') }}
  </label>

  <input type="text"
         name="title"
         id="title"
         value="{{ old('title', @$page->title) }}"
         placeholder="title"
         required
         class="form-control">

  @if ($errors->has('title'))
    <div class="help-block">
      {{ $errors->first('title') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">

  <label for="content" class="control-label">
    {{ trans('content') }}
  </label>

      <textarea
          name="content"
          id="content"
          placeholder="content"
          required
          class="form-control">{{ old('content', @$page->content) }}</textarea>

  @if ($errors->has('content'))
    <div class="help-block">
      {{ $errors->first('content') }}
    </div>
  @endif
</div>

<div class="form-group">
  <button type="submit" class="btn btn-success">Save</button>
  <a href="/page" class="btn btn-default">Back to list</a>
</div>

