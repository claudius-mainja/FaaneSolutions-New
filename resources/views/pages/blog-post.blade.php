@extends('layouts.master')

@section('title', $post->title . ' - Falane Solutions Blog')
@section('meta_description', Str::limit($post->excerpt, 160))
@section('meta_tags')
    @if($post->featured_image)
        <meta property="og:image" content="{{ $post->featured_image }}">
    @endif
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ Str::limit($post->excerpt, 160) }}">
    <meta name="twitter:card" content="summary_large_image">
@endsection

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[55vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="{{ $post->featured_image ?? 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=85' }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="max-w-4xl mx-auto">
                <a href="{{ route('blog') }}" class="inline-flex items-center text-sm text-gray-300 transition-colors hover:text-white mb-6">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    Back to Blog
                </a>
                <div data-aos="fade-up">
                    @if($post->category)
                        <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">{{ $post->category }}</span>
                    @endif
                    <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl font-sans">{{ $post->title }}</h1>
                    <div class="flex flex-wrap items-center gap-4 mt-4 text-gray-300">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            {{ $post->published_at?->format('M d, Y') ?? $post->created_at?->format('M d, Y') ?? '' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="grid gap-12 lg:grid-cols-3">
                <div class="lg:col-span-2" data-aos="fade-right">
                    @if($post->featured_image)
                        <div class="overflow-hidden rounded-2xl shadow-xl img-zoom-card mb-8">
                            <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="object-cover w-full h-[450px]">
                        </div>
                    @endif

                    <article class="bg-white p-8 rounded-2xl shadow-sm">
                        <div class="prose prose-lg max-w-none text-gray-600">
                            {!! nl2br(e($post->content)) !!}
                        </div>

                        @if($post->tags && is_array($post->tags) && count($post->tags) > 0)
                            <div class="flex flex-wrap gap-2 mt-10 pt-6 border-t border-gray-200">
                                <span class="text-sm font-semibold text-gray-600">Tags:</span>
                                @foreach($post->tags as $tag)
                                    <span class="px-3 py-1 text-sm bg-gray-100 rounded-full text-gray-600">{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif

                        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-gray-200">
                            <span class="text-sm font-semibold text-gray-600">Share:</span>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-10 h-10 text-gray-500 transition-colors border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Share on LinkedIn">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-10 h-10 text-gray-500 transition-colors border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Share on Facebook">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-10 h-10 text-gray-500 transition-colors border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Share on Twitter/X">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="lg:col-span-1" data-aos="fade-left">
                    <div class="sticky top-24 space-y-6">
                        @if($relatedPosts && $relatedPosts->count() > 0)
                            <div class="p-6 bg-white rounded-2xl shadow-sm">
                                <h3 class="text-lg font-bold text-primary-500 font-sans">Related Posts</h3>
                                <div class="mt-4 space-y-4">
                                    @foreach($relatedPosts as $related)
                                        <a href="{{ route('blog.post', $related->slug) }}" class="flex gap-3 transition-colors group">
                                            <div class="flex-shrink-0 w-20 h-20 overflow-hidden rounded-xl img-zoom-card">
                                                <img src="{{ $related->featured_image ?? 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=150&q=80' }}" alt="{{ $related->title }}" class="object-cover w-full h-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-primary-500 group-hover:text-secondary-500 transition-colors">{{ Str::limit($related->title, 50) }}</p>
                                                <p class="mt-1 text-xs text-gray-400">{{ $related->published_at?->format('M d, Y') ?? $related->created_at?->format('M d, Y') ?? '' }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="relative overflow-hidden rounded-2xl p-6 gradient-bg">
                            <div class="absolute inset-0 opacity-20">
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&q=80" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="relative">
                                <h3 class="text-lg font-bold text-white font-sans">Subscribe</h3>
                                <p class="mt-2 text-sm text-gray-300">Get the latest insights delivered to your inbox.</p>
                                <div class="mt-4">
                                    @livewire('newsletter-signup')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection