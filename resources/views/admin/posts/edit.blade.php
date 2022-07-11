@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edita -> {{$post->title}}</h2>
    <form action="{{route('admin.posts.update', $post)}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label  class="form-label">Titolo articolo</label>
          <input type="text" class="form-control" value="{{old($post->title)}}" id="title" name="title">
        </div>
        <div class="mb-3">
            <label  class="form-label">Contenuto</label>
            <textarea class="form-control" name="content" value="{{old($post->content)}}" id="content" cols="30" rows="10">

            </textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
