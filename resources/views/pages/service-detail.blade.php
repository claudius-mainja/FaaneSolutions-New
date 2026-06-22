@extends('layouts.master')

@section('title', $service->title . ' - Falane Solutions')
@section('meta_description', Str::limit($service->excerpt ?? $service->description, 160))

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[55vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="{{ $service->image ? asset($service->image) : 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1920&q=85' }}" alt="{{ $service->title }}" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="max-w-4xl mx-auto">
                <a href="{{ route('services') }}" class="inline-flex items-center text-sm text-gray-300 transition-colors hover:text-white mb-6">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    Back to Services
                </a>
                <div data-aos="fade-up">
                    <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">{{ $service->title }}</span>
                    <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl font-sans">{{ $service->title }}</h1>
                    @if($service->excerpt)
                        <p class="max-w-2xl mt-4 text-lg text-gray-200">{{ $service->excerpt }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="grid gap-12 lg:grid-cols-3">
                <div class="lg:col-span-2" data-aos="fade-right">
                    @if($service->image)
                        <div class="overflow-hidden rounded-2xl shadow-xl img-zoom-card mb-8">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="object-cover w-full h-[400px]">
                        </div>
                    @endif
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <div class="prose prose-lg max-w-none text-gray-600">
                            {!! nl2br(e($service->description)) !!}
                        </div>

                        @if($service->highlights && is_array($service->highlights) && count($service->highlights) > 0)
                            <div class="mt-10">
                                <h2 class="mb-6 text-2xl font-bold text-primary-500 font-sans">Key Highlights</h2>
                                <div class="grid gap-4 md:grid-cols-2">
                                    @foreach($service->highlights as $highlight)
                                        <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                            <svg class="w-5 h-5 mt-0.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                            <span class="text-gray-700">{{ $highlight }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="p-8 mt-8 rounded-2xl bg-gradient-to-r from-secondary-50 to-accent-50">
                        <h2 class="text-2xl font-bold text-primary-500 font-sans">Interested in This Service?</h2>
                        <p class="mt-2 text-gray-600">Contact us today to discuss how we can help your business with {{ $service->title }}.</p>
                        <a href="{{ route('contact') }}" class="mt-4 btn-primary inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                <div class="lg:col-span-1" data-aos="fade-left">
                    <div class="sticky top-24 space-y-6">
                        <div class="p-6 bg-white rounded-2xl shadow-sm">
                            <h3 class="text-lg font-bold text-primary-500 font-sans">Other Services</h3>
                            <div class="mt-4 space-y-3">
                                @foreach($otherServices as $other)
                                    <a href="{{ route('service.detail', $other->slug) }}" class="block p-3 transition-colors bg-gray-50 rounded-xl hover:bg-secondary-50">
                                        <p class="font-medium text-primary-500">{{ $other->title }}</p>
                                        <p class="mt-1 text-sm text-gray-500">{{ Str::limit($other->excerpt, 80) }}</p>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-2xl gradient-bg p-6">
                            <div class="absolute inset-0 opacity-20">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&q=80" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="relative">
                                <h3 class="text-lg font-bold text-white font-sans">Need Consultation?</h3>
                                <p class="mt-2 text-sm text-gray-300">Book a free consultation with our experts today.</p>
                                <a href="{{ route('contact') }}" class="btn-accent mt-4 w-full justify-center text-sm inline-flex items-center gap-2">Book Now <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection