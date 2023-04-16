@extends('layouts.content')
@section('content')
<h1>Creation</h1>
<form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="title" value="{{ $post->title }}">
        @error('title')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input name="content" type="text" class="form-control" id="content" placeholder="content" value="{{ $post->content }}">
        @error('content')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input name="image" type="text" class="form-control" id="image" placeholder="image" value="{{ $post->image }}">
        @error('image')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
