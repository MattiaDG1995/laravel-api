@extends('layouts.dashboard')
@section('content')

<div class="text-center">
    <h1>Modifica: {{$post->title}}</h1> 
</div>

<form action="{{route('admin.posts.update', $post->id)}}" method="POST">
@csrf
@method('PUT')
<div class="my-4">
    <label for="" class="form-label">Titolo</label>
    <input value="{{$post->title}}" type="text" class="form-control @error( 'title' )is invalid @enderror"  name="title">
    @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="my-4">
    <label for="" class="form-label">Body</label>
    <textarea class="form-control @error( 'title' )is invalid @enderror" name="body">{{$post->body}}</textarea>
    @error('body')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="my-4">
    <label for="">Categories</label>
    <select class="form-control" name="category_id" id="">
    <option value="">Seleziona categoria</option>
    @foreach($categories as $category)
        <option value="{{$category->id}}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
    @endforeach
    </select>
</div>

<div class="my-4">
    <label for="">Tags:</label>
    @foreach( $tags as $tag)
        <label for="">
            <input type="checkbox" name="tags[]" value="{{$tag->id}}"  {{$post->tags->contains($tag) ? 'checked' : ''}}>
            {{$tag->name}}
        </label>
    @endforeach
</div>

<button type="submit" class="btn btn-primary">Crea</button>

</form>

@endsection