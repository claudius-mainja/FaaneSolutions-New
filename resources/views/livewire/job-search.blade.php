<div>
    <div class="grid gap-4 mb-8 md:grid-cols-4">
        <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search jobs..." class="input-field !pl-10">
        </div>

        <select wire:model.live="type" class="input-field">
            <option value="">All Types</option>
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
            <option value="contract">Contract</option>
            <option value="remote">Remote</option>
        </select>

        <select wire:model.live="department" class="input-field">
            <option value="">All Departments</option>
            @foreach($departments as $dept)
                <option value="{{ $dept }}">{{ $dept }}</option>
            @endforeach
        </select>

        <button wire:click="resetFilters" class="btn-outline text-sm">Clear Filters</button>
    </div>

    <div class="space-y-6">
        @forelse($jobs as $job)
            <div class="card hover:shadow-xl transition-all duration-300 border border-gray-100" data-aos="fade-up">
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
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-secondary-100 text-secondary-700">
                                {{ ucfirst($job->type) }}
                            </span>
                            @if($job->department)
                                <span class="text-gray-500">{{ $job->department }}</span>
                            @endif
                            @if($job->closing_date)
                                <span class="text-gray-400">Closes: {{ $job->closing_date->format('M d, Y') }}</span>
                            @endif
                        </div>
                        <p class="mt-3 text-gray-600">{{ Str::limit($job->summary, 200) }}</p>
                    </div>
                    <div class="flex gap-3 shrink-0">
                        <a href="{{ route('career.detail', $job->slug) }}" class="btn-outline text-sm">View Details</a>
                        <a href="{{ route('career.detail', $job->slug) }}#apply" class="btn-primary text-sm">Apply Now</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="py-12 text-center">
                <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <p class="mt-4 text-xl text-gray-500 font-sans">No job openings available at the moment.</p>
                <p class="mt-2 text-gray-400">Please check back later or subscribe to our newsletter for updates.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $jobs->links() }}
    </div>
</div>
