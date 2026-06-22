@extends('layouts.master')

@section('title', $job->title . ' - Careers at Falane Solutions')
@section('meta_description', Str::limit($job->summary, 160))

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[55vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1920&q=85" alt="{{ $job->title }}" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="max-w-4xl mx-auto">
                <a href="{{ route('careers') }}" class="inline-flex items-center text-sm text-gray-300 transition-colors hover:text-white mb-6">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    Back to Careers
                </a>
                <div data-aos="fade-up">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">{{ $job->department ?? 'General' }}</span>
                        @if($job->type)
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-white/20 text-white backdrop-blur-md">{{ ucfirst($job->type) }}</span>
                        @endif
                    </div>
                    <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl font-sans">{{ $job->title }}</h1>
                    <div class="flex flex-wrap gap-4 mt-4">
                        @if($job->location)
                            <span class="flex items-center gap-1 text-gray-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg> {{ $job->location }}</span>
                        @endif
                        @if($job->salary_range)
                            <span class="flex items-center gap-1 text-gray-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> {{ $job->salary_range }}</span>
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
                    @if($job->summary)
                        <div class="p-6 mb-8 bg-white rounded-xl shadow-sm border-l-4 border-secondary-400">
                            <p class="text-lg text-secondary-800">{{ $job->summary }}</p>
                        </div>
                    @endif

                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <div class="prose prose-lg max-w-none text-gray-600">
                            {!! nl2br(e($job->description)) !!}
                        </div>

                        @if($job->requirements && is_array($job->requirements) && count($job->requirements) > 0)
                            <div class="mt-10">
                                <h2 class="mb-4 text-2xl font-bold text-primary-500 font-sans">Requirements</h2>
                                <ul class="space-y-3">
                                    @foreach($job->requirements as $req)
                                        <li class="flex items-start gap-3">
                                            <svg class="w-5 h-5 mt-1 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            <span class="text-gray-700">{{ $req }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if($job->responsibilities && is_array($job->responsibilities) && count($job->responsibilities) > 0)
                            <div class="mt-10">
                                <h2 class="mb-4 text-2xl font-bold text-primary-500 font-sans">Responsibilities</h2>
                                <ul class="space-y-3">
                                    @foreach($job->responsibilities as $resp)
                                        <li class="flex items-start gap-3">
                                            <svg class="w-5 h-5 mt-1 text-accent-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                            <span class="text-gray-700">{{ $resp }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div id="apply" class="p-8 mt-8 rounded-2xl relative overflow-hidden">
                        <div class="absolute inset-0">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" alt="" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-primary-500/90"></div>
                        </div>
                        <div class="relative">
                            <h2 class="text-2xl font-bold text-white font-sans">Apply for This Position</h2>
                            <p class="mt-2 text-gray-300">Complete the form below to submit your application.</p>
                            <div class="mt-6">
                                @livewire('job-application', ['job' => $job])
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1" data-aos="fade-left">
                    <div class="sticky top-24 space-y-6">
                        <div class="p-6 bg-white rounded-2xl shadow-sm">
                            <h3 class="text-lg font-bold text-primary-500 font-sans">Job Summary</h3>
                            <dl class="mt-4 space-y-4">
                                @if($job->department)<div><dt class="text-sm text-gray-500">Department</dt><dd class="font-medium text-primary-500">{{ $job->department }}</dd></div>@endif
                                @if($job->type)<div><dt class="text-sm text-gray-500">Employment Type</dt><dd class="font-medium text-primary-500">{{ ucfirst($job->type) }}</dd></div>@endif
                                @if($job->location)<div><dt class="text-sm text-gray-500">Location</dt><dd class="font-medium text-primary-500">{{ $job->location }}</dd></div>@endif
                                @if($job->salary_range)<div><dt class="text-sm text-gray-500">Salary Range</dt><dd class="font-medium text-primary-500">{{ $job->salary_range }}</dd></div>@endif
                                @if($job->closing_date)<div><dt class="text-sm text-gray-500">Closing Date</dt><dd class="font-medium text-primary-500">{{ $job->closing_date->format('M d, Y') }}</dd></div>@endif
                            </dl>
                            <a href="#apply" class="btn-primary w-full justify-center mt-6 inline-flex items-center gap-2">Apply Now <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>

                        @if($otherJobs && $otherJobs->count() > 0)
                            <div class="p-6 bg-white rounded-2xl shadow-sm">
                                <h3 class="text-lg font-bold text-primary-500 font-sans">Other Openings</h3>
                                <div class="mt-4 space-y-3">
                                    @foreach($otherJobs as $other)
                                        <a href="{{ route('career.detail', $other->slug) }}" class="block p-3 transition-colors bg-gray-50 rounded-xl hover:bg-secondary-50">
                                            <p class="font-medium text-primary-500">{{ $other->title }}</p>
                                            <div class="flex items-center gap-2 mt-1">
                                                <span class="text-xs text-gray-500">{{ $other->location ?? 'Remote' }}</span>
                                                <span class="px-2 py-0.5 text-xs rounded-full bg-secondary-100 text-secondary-700">{{ ucfirst($other->type) }}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection