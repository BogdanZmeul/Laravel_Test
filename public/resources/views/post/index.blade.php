@extends('layouts.content')
@section('content')
    <div>
        <a href="{{ route('post.create') }}" class="btn btn-dark mb-3">Create new post</a>
    </div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
        @endforeach
    <div class="mt-3">
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection
