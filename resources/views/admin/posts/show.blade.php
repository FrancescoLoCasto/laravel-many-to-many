@extends('layouts.admin')

@section('content')
<div class="container">




   <div class="card text-center">
      <div class="card-header">
         {{$post->author}}
         <br>
         {{$post->type->name}}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <div class="card-body">

         <div>
            @foreach ($post->technologies as $technology)
                <span class="badge rounded-pill p-3" style="background-color: {{$technology->bg_color}}; color: {{$technology->accent_color}}">
                  {{ $technology->name }}
                </span>
            @endforeach
         </div>

         @if (str_starts_with($post->image, 'http'))
            <img src="{{$post->image}}"
         @else
            <img src="{{asset ('storage/' . $post->image)}}" 
         @endif
            alt="{{$post->title}} Image" class="img-fluid">
        </div>
        <p class="card-text">{{$post->content}}</p>
        <a href="{{route('admin.posts.edit', $post->slug)}}" class="btn btn-sm btn-primary">
         Edit
         </a>
         <form action="{{route('admin.posts.destroy', $post->slug)}}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">
               Delete
            </button>
         </form>
      </div>
      <div class="card-footer text-muted">
         {{$post->post_date}}
      </div>
    </div>
       </div>
</div>
@endsection
