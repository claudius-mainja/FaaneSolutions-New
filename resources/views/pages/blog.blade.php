@extends('layouts.master')

@section('title', 'Blog - Falane Solutions')

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[55vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=85" alt="Blog" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">Our Blog</span>
                <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl font-sans">Insights & Updates</h1>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-200">Stay informed with the latest HR trends, immigration updates, and recruitment best practices.</p>
            </div>
        </div>
    </section>

    {{-- Blog Grid --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            @if($categories && $categories->count() > 0)
                <div class="flex flex-wrap gap-3 mb-10" data-aos="fade-up">
                    <a href="{{ route('blog') }}" class="px-4 py-2 text-sm font-semibold rounded-full transition-all duration-200 {{ !request('category') ? 'bg-secondary-400 text-white shadow-md' : 'bg-white text-gray-600 hover:bg-secondary-100 hover:text-secondary-600 shadow-sm' }}">
                        All
                    </a>
                    @foreach($categories as $cat)
                        <a href="{{ route('blog') . '?category=' . urlencode($cat) }}" class="px-4 py-2 text-sm font-semibold rounded-full transition-all duration-200 {{ request('category') === $cat ? 'bg-secondary-400 text-white shadow-md' : 'bg-white text-gray-600 hover:bg-secondary-100 hover:text-secondary-600 shadow-sm' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            @endif

            @if($posts && $posts->count() > 0)
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 stagger-3d">
                    @foreach($posts as $post)
                        <article class="service-card bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group tilt-card">
                            <div class="overflow-hidden aspect-video img-zoom-card">
                                <img src="{{ $post->featured_image ?? 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80' }}" alt="{{ $post->title }}" class="object-cover w-full h-full">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2">
                                    @if($post->category)
                                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-secondary-100 text-secondary-700">{{ $post->category }}</span>
                                    @endif
                                    <span class="text-xs text-gray-400">{{ $post->published_at?->format('M d, Y') ?? $post->created_at?->format('M d, Y') ?? '' }}</span>
                                </div>
                                <h3 class="mt-3 text-lg font-bold text-primary-500 font-sans">
                                    <a href="{{ route('blog.post', $post->slug) }}" class="hover:text-secondary-500 transition-colors">{{ Str::limit($post->title, 60) }}</a>
                                </h3>
                                <p class="mt-2 text-sm text-gray-600">{{ Str::limit($post->excerpt, 120) }}</p>
                                <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                                    <a href="{{ route('blog.post', $post->slug) }}" class="inline-flex items-center text-sm font-semibold text-secondary-500 hover:text-secondary-600">
                                        Read More
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="py-20 text-center bg-white rounded-2xl shadow-sm">
                    <svg class="w-20 h-20 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    <h3 class="mt-6 text-2xl font-bold text-gray-500 font-sans">No Posts Yet</h3>
                    <p class="mt-2 text-gray-400">Check back soon for the latest insights and updates from Falane Solutions.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- Newsletter CTA --}}
    <section class="relative overflow-hidden py-20 parallax-section">
        <div class="absolute inset-0 parallax-bg">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1920&q=80" alt="Newsletter" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 to-primary-500/80"></div>
        <div class="relative section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-white md:text-4xl font-sans">Stay Updated</h2>
                <p class="mt-4 text-lg text-gray-300">Subscribe to receive the latest HR insights, immigration updates, and recruitment tips in your inbox.</p>
                <div class="max-w-md mx-auto mt-8">
                    @livewire('newsletter-signup')
                </div>
            </div>
        </div>
    </section>
@endsection