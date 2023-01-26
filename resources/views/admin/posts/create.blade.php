@extends('layouts.dashboard')
@section('content')

<div class="text-center">
    <h1>crea post</h1> 
</div>

<form action="{{route('admin.posts.store')}}" method="POST">
@csrf
<div class="my-4">
    <label for="" class="form-label">Titolo</label>
    <input type="text" class="form-control @error( 'title' )is invalid @enderror"  name="title">
    @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div>
    <label for="" class="form-label">Body</label>
    <textarea class="form-control @error( 'title' )is invalid @enderror" name="body"></textarea>
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
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">Crea</button>

</form>

@endsection