@extends('layouts.dashboard')
@section('content')
<a href="{{route('admin.posts.create')}}">Nuovo Post</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">title</th>
      <th scope="col">body</th>
      <th scope="col">categories</th>
      <th scope="col">tags</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>

    @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>
        <a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a>
      </td>
      <td>{{$post->body}}</td>
      <td>
        @if($post->category)
          {{$post->category['name']}}
        @endif
      </td>
      <td>
        @foreach($post->tags as $singolTag)
            {{$singolTag->name}}
        @endforeach
      </td>
      
      <td>
        <a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
        <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

<div class="d-flex justify-content-center">
    {{$posts->links()}}
</div>

@endsection