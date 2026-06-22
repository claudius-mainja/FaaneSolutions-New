@extends('layouts.master')

@php
    $categoryImages = [
        'Immigration' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1200&q=85',
        'HR Strategy' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&q=85',
        'Business' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=1200&q=85',
        'Recruitment' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1200&q=85',
    ];

    $imageMap = [
        'Immigration' => [
            'hero' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1920&q=85',
            'inline' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=85',
        ],
        'HR Strategy' => [
            'hero' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920&q=85',
            'inline' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=85',
        ],
        'Business' => [
            'hero' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=1920&q=85',
            'inline' => 'https://images.unsplash.com/photo-1664575602276-acd073f104c1?w=800&q=85',
        ],
        'Recruitment' => [
            'hero' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=85',
            'inline' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&q=85',
        ],
    ];

    $cat = $post->category && isset($imageMap[$post->category]) ? $post->category : 'Immigration';
    $heroImg = $post->featured_image ?? $imageMap[$cat]['hero'];
    $inlineImg = $imageMap[$cat]['inline'];

    $serviceLinks = [
        'Recruitment' => [['url' => route('service.detail', 'recruitment-services'), 'label' => 'Recruitment Services']],
        'Immigration' => [['url' => route('service.detail', 'immigration-services'), 'label' => 'Immigration Services']],
        'HR Strategy' => [
            ['url' => route('service.detail', 'hr-outsourcing'), 'label' => 'HR Outsourcing'],
            ['url' => route('service.detail', 'management-training'), 'label' => 'Management Training'],
        ],
        'Business' => [
            ['url' => route('service.detail', 'company-registration'), 'label' => 'Company Registration'],
            ['url' => route('service.detail', 'payroll'), 'label' => 'Payroll Services'],
            ['url' => route('service.detail', 'accounting-auditing'), 'label' => 'Accounting & Auditing'],
        ],
    ];
    $relatedServices = $serviceLinks[$post->category] ?? [];
@endphp

@section('title', $post->title . ' - Falane Solutions Blog')
@section('meta_description', Str::limit($post->excerpt, 160))
@section('meta_tags')
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ Str::limit($post->excerpt, 160) }}">
    <meta property="og:image" content="{{ $heroImg }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:site_name" content="Falane Solutions">
    @if($post->category)
        <meta property="article:section" content="{{ $post->category }}">
    @endif
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ Str::limit($post->excerpt, 160) }}">
    <meta name="twitter:image" content="{{ $heroImg }}">
    @if($post->tags && is_array($post->tags))
        <meta name="keywords" content="{{ implode(', ', $post->tags) }}">
    @endif
    <link rel="canonical" href="{{ request()->url() }}">
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "Article",
        "headline": "{{ $post->title }}",
        "description": "{{ Str::limit($post->excerpt, 160) }}",
        "image": "{{ $heroImg }}",
        "datePublished": "{{ $post->published_at?->toIso8601String() ?? $post->created_at?->toIso8601String() }}",
        "dateModified": "{{ $post->updated_at?->toIso8601String() }}",
        "publisher": {
            "@type": "Organization",
            "name": "Falane Solutions",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('images/logo.png') }}"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ request()->url() }}"
        }
    }
    </script>
@endsection

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[55vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="{{ $heroImg }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
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
                        @if($post->category)
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                                {{ $post->category }}
                            </span>
                        @endif
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
                            {!! $post->content !!}
                        </div>

                        {{-- Inline category image --}}
                        <div class="my-10 overflow-hidden rounded-2xl shadow-lg">
                            <img src="{{ $inlineImg }}" alt="{{ $post->category }} - Falane Solutions" class="object-cover w-full h-64 md:h-80" loading="lazy">
                        </div>

                        {{-- Related services backlinks --}}
                        @if(count($relatedServices) > 0)
                            <div class="p-6 mt-8 bg-gradient-to-br from-primary-50 to-secondary-50 rounded-2xl border border-primary-100">
                                <h3 class="text-lg font-bold text-primary-500 font-sans">Related Services</h3>
                                <p class="mt-1 text-sm text-gray-600">Explore how Falane Solutions can help your business.</p>
                                <div class="flex flex-wrap gap-3 mt-4">
                                    @foreach($relatedServices as $svc)
                                        <a href="{{ $svc['url'] }}" class="inline-flex items-center gap-1.5 px-4 py-2 text-sm font-semibold text-white bg-primary-500 rounded-full hover:bg-primary-600 transition-colors shadow-sm">
                                            {{ $svc['label'] }}
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                        </a>
                                    @endforeach
                                </div>
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
                            <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . request()->url()) }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-10 h-10 text-gray-500 transition-colors border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Share on WhatsApp">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
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
                                                <img src="{{ $related->featured_image ?? $categoryImages[$related->category] ?? 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=150&q=80' }}" alt="{{ $related->title }}" class="object-cover w-full h-full">
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

                        {{-- Quick Links --}}
                        <div class="p-6 bg-white rounded-2xl shadow-sm">
                            <h3 class="text-lg font-bold text-primary-500 font-sans">Quick Links</h3>
                            <div class="mt-4 space-y-2">
                                <a href="{{ route('services') }}" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 rounded-lg hover:bg-primary-50 hover:text-primary-500 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                    Our Services
                                </a>
                                <a href="{{ route('careers') }}" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 rounded-lg hover:bg-primary-50 hover:text-primary-500 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Careers
                                </a>
                                <a href="{{ route('contact') }}" class="flex items-center gap-2 px-3 py-2 text-sm text-gray-600 rounded-lg hover:bg-primary-50 hover:text-primary-500 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Contact Us
                                </a>
                            </div>
                        </div>

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
