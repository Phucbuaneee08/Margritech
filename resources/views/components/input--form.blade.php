
@extends('home')
@section('content')
<form method="post" action="{{route('posts.store')}}">
  @csrf
  <div class="form-group row">
    <label for="inputEmail3"  class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="user_id" value="{{Auth::user()->id}}" type="hidden">
      <input type="text" class="form-control" name="title" id="inputEmail3" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Content</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="content" id="inputPassword3" placeholder="Content"></textarea>
    </div>
  </div>
  <div class="col-sm-2">Subject</div>
  @foreach($tags as $tag)
  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="tag[]"  value="{{$tag->id}}">
        <label class="form-check-label" for="gridCheck1">
          {{$tag->name}}
        </label>
      </div>
    </div>
  </div>
  @endforeach
  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="saveBtn">Submit</button>
    </div>
  </div>
</form>
@endsection