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
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-200">At Falane Solutions, we help organizations and businesses in building a team of dedicated professionals who are passionate about innovation and excellence.</p>
            </div>
        </div>
    </section>

    {{-- Job Listings with Inline Filters --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding" x-data="jobFilters({{ $jobs->toJson() }})" x-init="init()">
            {{-- Filter Bar --}}
            <div class="mb-10" data-aos="fade-up">
                <div class="flex flex-col items-center justify-between gap-4 mb-6 md:flex-row">
                    <div>
                        <h2 class="text-3xl font-bold text-primary-500 font-sans">Open Positions</h2>
                        <p class="mt-2 text-gray-600">Find your next role.</p>
                    </div>
                    <div class="relative w-full md:w-72">
                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        <input type="text" x-model="search" @input="filterJobs" placeholder="Search by title, department or keyword..." class="w-full pl-12 pr-4 py-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400 text-sm outline-none transition-shadow">
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-3 p-5 bg-white rounded-xl shadow-sm border border-gray-100">
                    {{-- Status Toggle --}}
                    <div class="flex items-center gap-1 p-1 bg-gray-100 rounded-lg">
                        <button @click="status = 'open'; filterJobs()" :class="status === 'open' ? 'bg-white shadow-sm text-primary-500' : 'text-gray-500 hover:text-gray-700'" class="px-4 py-2 text-sm font-medium rounded-md transition-all">Open</button>
                        <button @click="status = 'all'; filterJobs()" :class="status === 'all' ? 'bg-white shadow-sm text-primary-500' : 'text-gray-500 hover:text-gray-700'" class="px-4 py-2 text-sm font-medium rounded-md transition-all">All Jobs</button>
                    </div>

                    <span class="hidden w-px h-6 bg-gray-200 md:block"></span>

                    {{-- Department Filter --}}
                    <select x-model="department" @change="filterJobs" class="px-4 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400">
                        <option value="">All Departments</option>
                        <template x-for="dept in uniqueDepartments" :key="dept">
                            <option x-text="dept" :value="dept"></option>
                        </template>
                    </select>

                    {{-- Location Filter --}}
                    <select x-model="location" @change="filterJobs" class="px-4 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400">
                        <option value="">All Locations</option>
                        <template x-for="loc in uniqueLocations" :key="loc">
                            <option x-text="loc" :value="loc"></option>
                        </template>
                    </select>

                    {{-- Type Filter --}}
                    <select x-model="type" @change="filterJobs" class="px-4 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg outline-none focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400">
                        <option value="">All Types</option>
                        <option value="full-time">Full Time</option>
                        <option value="contract">Contract</option>
                        <option value="part-time">Part Time</option>
                    </select>

                    {{-- Clear Filters --}}
                    <button @click="resetFilters" x-show="search || department || location || type || status === 'all'" x-cloak class="px-4 py-2 text-sm font-medium text-secondary-600 bg-secondary-50 rounded-lg hover:bg-secondary-100 transition-colors">
                        Clear Filters
                    </button>
                </div>

                {{-- Results count --}}
                <p class="mt-4 text-sm text-gray-500" x-show="filteredJobs.length > 0">
                    Showing <span class="font-semibold text-gray-700" x-text="filteredJobs.length"></span> <span x-text="filteredJobs.length === 1 ? 'position' : 'positions'"></span>
                </p>
            </div>

            {{-- Job Cards --}}
            <div class="space-y-6" data-aos="fade-up">
                <template x-for="job in filteredJobs" :key="job.id">
                    <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-xl font-bold text-primary-500 font-sans truncate" x-text="job.title"></h3>
                                    {{-- Expired badge --}}
                                    <span x-show="isExpired(job.closing_date)" class="shrink-0 inline-flex items-center gap-1 px-2.5 py-0.5 text-xs font-semibold rounded-full bg-red-100 text-red-700 border border-red-200">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        Expired
                                    </span>
                                    {{-- Open badge --}}
                                    <span x-show="!isExpired(job.closing_date)" class="shrink-0 inline-flex items-center gap-1 px-2.5 py-0.5 text-xs font-semibold rounded-full bg-green-100 text-green-700 border border-green-200">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                        Open
                                    </span>
                                </div>
                                <div class="flex flex-wrap items-center gap-3 mt-2 text-sm text-gray-600">
                                    <span x-show="job.location" class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span x-text="job.location"></span>
                                    </span>
                                    <span class="inline-flex items-center gap-1 px-3 py-1 text-xs font-semibold rounded-full bg-secondary-100 text-secondary-700">
                                        <span x-text="job.type.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase())"></span>
                                    </span>
                                    <span x-show="job.department" class="text-gray-500" x-text="job.department"></span>
                                    <span x-show="job.closing_date" class="text-gray-400">
                                        Closes: <span x-text="formatDate(job.closing_date)"></span>
                                    </span>
                                </div>
                                <p class="mt-3 text-gray-600 text-sm line-clamp-2" x-text="job.summary"></p>
                            </div>
                            <div class="flex gap-3 shrink-0">
                                <a :href="'/careers/' + job.slug" class="btn-outline text-sm inline-flex items-center gap-1.5">
                                    View Details
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                                <a :href="'/careers/' + job.slug + '#apply'" class="btn-primary text-sm inline-flex items-center gap-1.5">
                                    Apply Now
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </template>

                {{-- No results --}}
                <div x-show="filteredJobs.length === 0" class="py-16 text-center bg-white rounded-2xl shadow-sm">
                    <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <p class="mt-4 text-xl text-gray-500 font-sans">No positions found</p>
                    <p class="mt-2 text-gray-400">Try adjusting your search filters or check back later for new openings.</p>
                    <button @click="resetFilters" class="mt-4 btn-outline text-sm">Clear Filters</button>
                </div>
            </div>
        </div>
    </section>

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

@push('scripts')
<script>
    function jobFilters(jobsData) {
        return {
            jobs: jobsData,
            filteredJobs: [],
            search: '',
            department: '',
            location: '',
            type: '',
            status: 'open',

            init() {
                this.filteredJobs = this.jobs;
                this.filterJobs();
            },

            get uniqueDepartments() {
                return [...new Set(this.jobs.map(j => j.department).filter(Boolean))].sort();
            },

            get uniqueLocations() {
                return [...new Set(this.jobs.map(j => j.location).filter(Boolean))].sort();
            },

            isExpired(closingDate) {
                if (!closingDate) return false;
                return new Date(closingDate) < new Date();
            },

            formatDate(dateStr) {
                if (!dateStr) return '';
                const d = new Date(dateStr);
                return d.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
            },

            filterJobs() {
                let result = [...this.jobs];

                if (this.status === 'open') {
                    result = result.filter(j => !this.isExpired(j.closing_date));
                }

                if (this.search) {
                    const q = this.search.toLowerCase();
                    result = result.filter(j =>
                        (j.title && j.title.toLowerCase().includes(q)) ||
                        (j.summary && j.summary.toLowerCase().includes(q)) ||
                        (j.department && j.department.toLowerCase().includes(q)) ||
                        (j.location && j.location.toLowerCase().includes(q))
                    );
                }

                if (this.department) {
                    result = result.filter(j => j.department === this.department);
                }

                if (this.location) {
                    result = result.filter(j => j.location === this.location);
                }

                if (this.type) {
                    result = result.filter(j => j.type === this.type);
                }

                this.filteredJobs = result;
            },

            resetFilters() {
                this.search = '';
                this.department = '';
                this.location = '';
                this.type = '';
                this.status = 'open';
                this.filterJobs();
            }
        }
    }
</script>
@endpush
