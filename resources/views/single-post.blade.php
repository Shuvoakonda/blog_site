@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <img src="{{ $post->image ? asset($post->image) : asset('assets/img/default.jpg') }}" class="card-img-top"
                        alt="{{ $post->title }}">
                    <div class="card-body">
                        <h1 class="card-title">{{ $post->title }}</h1>
                        <p class="card-text text-muted mb-2">
                            <span>By {{ $post->author }}</span> |
                            <span>{{ $post->category->name ?? '-' }}</span> |
                            <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : '-' }}</span>
                        </p>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
