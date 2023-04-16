@extends('layouts.content')
@section('content')
        @foreach($posts as $post)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">{{ $post->title }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $post->content }}</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>{{ $post->image }}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Likes: {{ $post->likes }}</td>

                </tr>
                </tbody>
            </table>
            <br>
        @endforeach
@endsection
