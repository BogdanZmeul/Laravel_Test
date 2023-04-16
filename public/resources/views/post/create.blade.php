@extends('layouts.content')
@section('content')
<h1>Creation</h1>
<form action="{{ route('post.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input
            value="{{ old('title') }}"
            name="title" type="text" class="form-control" id="title" placeholder="title">
        @error('title')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input
            value="{{ old('content') }}"
            name="content" type="text" class="form-control" id="content" placeholder="content">
        @error('content')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input
            value="{{ old('image') }}"
            name="image" type="text" class="form-control" id="image" placeholder="image">
        @error('image')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" id="category" name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->title }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <select multiple class="form-control" id="tags" name="tags[]">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{ $tag->title }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
