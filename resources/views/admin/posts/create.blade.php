@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any)
                <div >
                    <ul >
                        @foreach ($errors->all() as $error )
                            <li  class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <form action="{{route('admin.posts.store')}}" method="POST" >
        @csrf
        <div class="mb-3">
          <label  class="form-label">Titolo articolo</label>
          <input type="text"  value="{{old("title")}}" class="form-control" id="title" name="title"
          @error('title')
              is-invalid
          @enderror>
          @error("title")
                   <p style="color: red">{{$message}}</p>
               @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Contenuto</label>
            <textarea class="form-control"  value="{{old("content")}}" name="content" id="content" cols="30" rows="10"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
