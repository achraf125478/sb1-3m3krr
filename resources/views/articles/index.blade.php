@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8">آخر الأخبار</h1>

    <div class="grid gap-6">
        @foreach($articles as $article)
            <article class="bg-white rounded-lg shadow-md overflow-hidden">
                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                @endif
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">
                        <a href="{{ route('articles.show', $article) }}" class="hover:text-blue-600">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <div class="text-gray-600 text-sm mb-4">
                        <span>{{ $article->category->name }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $article->published_at->format('Y/m/d') }}</span>
                    </div>
                    <p class="text-gray-700 line-clamp-3">
                        {{ Str::limit(strip_tags($article->content), 200) }}
                    </p>
                </div>
            </article>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $articles->links() }}
    </div>
</div>
@endsection