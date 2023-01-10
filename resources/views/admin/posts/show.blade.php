@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $post->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $post->created_at }}</h5>
            <p>{{ $post->slug }}</p>
        </div>
        <p class="mt-3">{{ $post->content }}</p>
    </div>
@endsection
