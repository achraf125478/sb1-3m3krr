@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <article class="bg-white rounded-lg shadow-md overflow-hidden">
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-64 object-cover">
        @endif
        <div class="p-8">
            <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
            
            <div class="text-gray-600 text-sm mb-6">
                <span>{{ $article->category->name }}</span>
                <span class="mx-2">•</span>
                <span>{{ $article->published_at->format('Y/m/d') }}</span>
            </div>

            <div class="prose prose-lg max-w-none">
                {!! $article->content !!}
            </div>
        </div>
    </article>
</div>
@endsection