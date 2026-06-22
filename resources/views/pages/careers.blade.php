@extends('layouts.master')

@section('title', 'Careers - Falane Solutions')

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[60vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1920&q=85" alt="Careers" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">Join Our Team</span>
                <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl font-sans">Explore Job Opportunities</h1>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-200">Build your career with a team passionate about innovation and excellence.</p>
            </div>
        </div>
    </section>

    {{-- Job Listings with Search Popup --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="flex items-center justify-between mb-8" data-aos="fade-up">
                <div>
                    <h2 class="text-3xl font-bold text-primary-500 font-sans">Open Positions</h2>
                    <p class="mt-2 text-gray-600">Find your next role.</p>
                </div>
                <button @click="$dispatch('open-search-modal')" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    Search Jobs
                </button>
            </div>

            <div class="space-y-6" data-aos="fade-up">
                @forelse($jobs as $job)
                    <div class="job-card p-6 bg-white rounded-2xl shadow-lg border border-gray-100 service-card">
                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-primary-500 font-sans">{{ $job->title }}</h3>
                                <div class="flex flex-wrap gap-3 mt-2 text-sm text-gray-600">
                                    @if($job->location)
                                        <span class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                            {{ $job->location }}
                                        </span>
                                    @endif
                                    <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-secondary-100 text-secondary-700">{{ ucfirst($job->type) }}</span>
                                    @if($job->department)
                                        <span class="text-gray-500">{{ $job->department }}</span>
                                    @endif
                                </div>
                                <p class="mt-3 text-gray-600 text-sm">{{ Str::limit($job->summary, 200) }}</p>
                            </div>
                            <div class="flex gap-3 shrink-0">
                                <a href="{{ route('career.detail', $job->slug) }}" class="btn-outline text-sm">View Details</a>
                                <a href="{{ route('career.detail', $job->slug) }}#apply" class="btn-primary text-sm">Apply Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="py-16 text-center bg-white rounded-2xl shadow-sm">
                        <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <p class="mt-4 text-xl text-gray-500 font-sans">No positions found</p>
                        <p class="mt-2 text-gray-400">Try adjusting your search or check back later.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Search Modal --}}
    <div x-data="{ open: false }" @open-search-modal.window="open = true" @keydown.escape.window="open = false" x-show="open" x-cloak class="fixed inset-0 z-[60] flex items-center justify-center p-4">
        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 modal-overlay" @click="open = false"></div>
        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95 translate-y-4" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-95 translate-y-4" class="relative w-full max-w-2xl modal-content">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <div class="flex items-center justify-between p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-primary-500 font-sans">Find Your Perfect Role</h3>
                    <button @click="open = false" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <div class="p-6">
                    @livewire('job-search')
                </div>
            </div>
        </div>
    </div>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-20 parallax-section">
        <div class="absolute inset-0 parallax-bg">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1920&q=80" alt="Team" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 to-primary-500/80"></div>
        <div class="relative section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-white md:text-4xl font-sans">Don't See a Suitable Role?</h2>
                <p class="mt-4 text-lg text-gray-300">We're always looking for talented individuals. Send us your CV and we'll keep you in mind for future opportunities.</p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="{{ route('contact') }}" class="btn-accent text-base !px-8 !py-4 inline-flex items-center gap-2 shadow-xl shadow-accent-400/20">
                        Send Your CV
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection