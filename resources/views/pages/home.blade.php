@extends('layouts.master')

@section('title', 'Falane Solutions - HR & Immigration Consultancy')

@section('content')
    {{-- Hero Section -- full-bleed image with parallax --}}
    <section class="relative min-h-screen overflow-hidden parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&q=85" alt="Professional team collaboration" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>

        <div class="relative z-10 flex items-center min-h-screen">
            <div class="section-padding w-full">
                <div class="max-w-4xl">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass text-white/90 text-sm font-semibold backdrop-blur-md animate-fade-in-up">
                        <svg class="w-4 h-4 text-secondary-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Zambian-Owned Since 2019
                    </div>
                    <h1 class="mt-6 text-5xl  text-white md:text-7xl lg:text-6xl font-sans font-black  animate-fade-in-up-delay-1">
                        Your HR & Immigration
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary-400 to-accent-400 font-black">Success Partner</span>
                    </h1>
                    <p class="max-w-2xl mt-6 text-lg leading-relaxed text-gray-200 md:text-xl animate-fade-in-up-delay-2">
                        We help organizations attract top talent, navigate complex immigration laws, and build high-performance workforces — so you can focus on growing your business.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-8 animate-fade-in-up-delay-2">
                        <a href="{{ route('contact') }}" class="btn-accent text-base !px-8 !py-4 inline-flex items-center gap-2 shadow-xl shadow-accent-400/20">
                            Book Free Consultation
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="{{ route('services') }}" class="btn-outline-light text-base !px-8 !py-4 inline-flex items-center gap-2">
                            Explore Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 h-48 bg-gradient-to-t from-primary-500/50 to-transparent"></div>
    </section>

    {{-- About Section -- full bleed image gallery + minimal text --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-gray-50 to-white">
        <div class="section-padding">
            <div class="grid items-center gap-16 lg:grid-cols-2">
                <div class="relative" data-aos="fade-right">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/aboutfounder.png') }}" alt="Falane Solutions Founder" class="w-full h-[500px] object-cover">
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-gradient-to-br from-secondary-400 to-accent-400 rounded-2xl p-6 shadow-xl floating-card">
                        <p class="text-5xl font-bold text-white font-sans">7+</p>
                        <p class="text-sm text-white/80">Years of Excellence</p>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">About Falane Solutions</span>
                    <h2 class="mt-4 text-3xl font-bold md:text-4xl text-primary-500 font-sans">Beyond HR. Beyond Immigration. Your Growth Partner.</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">Since 2019, we've helped Zambian and international businesses build compliant, high-performing workforces through strategic HR, recruitment, and immigration solutions.</p>

                    <div class="grid gap-4 mt-8">
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 img-scale-in tilt-card">
                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-secondary-100 text-secondary-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary-500 font-sans">Expert Team</h3>
                                <p class="mt-1 text-sm text-gray-600">Seasoned HR and immigration professionals serving diverse industries across Zambia.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 img-scale-in tilt-card">
                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-secondary-100 text-secondary-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary-500 font-sans">Local Expertise</h3>
                                <p class="mt-1 text-sm text-gray-600">Deep understanding of Zambian labour laws, immigration regulations, and business environment.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="mt-6 btn-primary inline-flex items-center gap-2">
                        Learn Our Story
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Pain Points / Problems We Solve -- info cards --}}
    <section class="py-20 gradient-bg">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-200 bg-white/20">The Challenges We Solve</span>
                <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl font-sans">Real Problems. Real Solutions.</h2>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-3">
                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="Professional interview" class="object-cover w-full h-48">
                    <div class="p-8">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-red-100 text-red-500 mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-primary-500 font-sans">Struggling to Find the Right Talent?</h3>
                        <p class="mt-3 text-gray-600 leading-relaxed">We source, screen, and deliver qualified candidates across mining, finance, healthcare, and more.</p>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&q=80" alt="Air travel" class="object-cover w-full h-48">
                    <div class="p-8">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-red-100 text-red-500 mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-primary-500 font-sans">Immigration Delays Costing You?</h3>
                        <p class="mt-3 text-gray-600 leading-relaxed">Our experts fast-track work permits, visas, and compliance so your team deploys on time.</p>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80" alt="Documents and compliance" class="object-cover w-full h-48">
                    <div class="p-8">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-red-100 text-red-500 mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-primary-500 font-sans">HR Compliance Overwhelming?</h3>
                        <p class="mt-3 text-gray-600 leading-relaxed">We handle payroll, statutory returns, and labour law compliance so you stay compliant — without headaches.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Overview -- icon-based cards --}}
    <section class="py-20 bg-primary-500" id="services">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-200 bg-white/20">What We Do</span>
                <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl font-sans">Complete HR & Immigration Solutions</h2>
                <p class="mt-4 text-gray-200">From recruitment to retirement, permits to compliance — we cover your entire people journey.</p>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-2 lg:grid-cols-4">
                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=80" alt="HR meeting" class="object-cover w-full h-48">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-secondary-100 text-secondary-600 mb-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary-500 font-sans">HR Consultancy</h3>
                        <p class="mt-2 text-sm text-gray-600">Comprehensive human resource management solutions to optimize your workforce.</p>
                        <ul class="mt-4 space-y-1.5">
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Recruitment and Selection</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Performance Management</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Training and Development</li>
                        </ul>
                        <a href="{{ route('services') }}" class="inline-flex items-center mt-4 text-sm font-semibold text-secondary-500 hover:text-secondary-600">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="50">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80" alt="Global connectivity" class="object-cover w-full h-48">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-secondary-100 text-secondary-600 mb-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary-500 font-sans">Immigration Consultancy</h3>
                        <p class="mt-2 text-sm text-gray-600">Expert guidance through complex immigration processes for your international workforce.</p>
                        <ul class="mt-4 space-y-1.5">
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Work Permit Applications</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Visa Assistance</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Expatriate Relocation Services</li>
                        </ul>
                        <a href="{{ route('services') }}" class="inline-flex items-center mt-4 text-sm font-semibold text-secondary-500 hover:text-secondary-600">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80" alt="Professional headshot" class="object-cover w-full h-48">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-secondary-100 text-secondary-600 mb-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary-500 font-sans">Recruitment Services</h3>
                        <p class="mt-2 text-sm text-gray-600">End-to-end recruitment solutions to help you find and hire the best talent across industries.</p>
                        <ul class="mt-4 space-y-1.5">
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Job Advertising</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Candidate Screening</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Interviews & Selection</li>
                        </ul>
                        <a href="{{ route('services') }}" class="inline-flex items-center mt-4 text-sm font-semibold text-secondary-500 hover:text-secondary-600">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="150">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80" alt="Financial charts" class="object-cover w-full h-48">
                    <div class="p-6">
                        <div class="flex items-center justify-center w-14 h-14 rounded-2xl bg-secondary-100 text-secondary-600 mb-4">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-primary-500 font-sans">Payroll & Statutory Returns</h3>
                        <p class="mt-2 text-sm text-gray-600">Accurate payroll processing, tax deductions, and full statutory compliance management.</p>
                        <ul class="mt-4 space-y-1.5">
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Salary Processing</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Tax Deductions</li>
                            <li class="flex items-center gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Statutory Compliance</li>
                        </ul>
                        <a href="{{ route('services') }}" class="inline-flex items-center mt-4 text-sm font-semibold text-secondary-500 hover:text-secondary-600">
                            Learn more
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center" data-aos="fade-up">
                <a href="{{ route('services') }}" class="btn-accent inline-flex items-center gap-2 shadow-lg shadow-accent-400/20">
                    View All 8 Services
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Core Values -- image cards --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">Our Values</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">What We Stand For</h2>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-2 lg:grid-cols-4">
                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=400&q=80" alt="Integrity" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/80 to-transparent"></div>
                    </div>
                    <div class="p-5 bg-white">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-secondary-100 text-secondary-600 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="font-bold text-primary-500 font-sans">Integrity</h3>
                        <p class="mt-1 text-sm text-gray-600">We uphold the highest ethical standards in all our interactions.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&q=80" alt="Excellence" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/80 to-transparent"></div>
                    </div>
                    <div class="p-5 bg-white">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-secondary-100 text-secondary-600 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="font-bold text-primary-500 font-sans">Excellence</h3>
                        <p class="mt-1 text-sm text-gray-600">We strive for excellence in every service we deliver.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&q=80" alt="Collaboration" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/80 to-transparent"></div>
                    </div>
                    <div class="p-5 bg-white">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-secondary-100 text-secondary-600 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-primary-500 font-sans">Collaboration</h3>
                        <p class="mt-1 text-sm text-gray-600">We work closely with clients to understand their unique needs.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&q=80" alt="Innovation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/80 to-transparent"></div>
                    </div>
                    <div class="p-5 bg-white">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-secondary-100 text-secondary-600 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <h3 class="font-bold text-primary-500 font-sans">Innovation</h3>
                        <p class="mt-1 text-sm text-gray-600">We continuously seek innovative solutions to complex challenges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Clients Carousel --}}
    <section class="py-20 gradient-bg overflow-hidden">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-200 bg-white/20">Our Clients</span>
                <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl font-sans">Trusted By Industry Leaders</h2>
                <p class="mt-4 text-gray-200">We're proud to work with a diverse range of organizations across various industries.</p>
            </div>

            @php
                $clients = [
                    ['USAID', 'USAID.png'],
                    ['Africa Alumni', 'Africa-alumini.png'],
                    ['Falcon Industries', 'Flacon-industries.png'],
                    ['VOX', 'VOX.png'],
                    ['Protech Alumni', 'Pro-tech.png'],
                    ['Lamasat', 'lamasat.png'],
                    ['Oriental Steel', 'oriental-steel_.png'],
                    ['Prospero', 'prospero.png'],
                    ['Hitachi', 'HITACH.png'],
                    ['Numetro', 'numetro.png'],
                    ['Rumphi Enterprises', 'rumphi.png'],
                    ['Sky Exchange', 'sky-exchange.png'],
                ];
                $row1 = array_slice($clients, 0, 6);
                $row2 = array_slice($clients, 6, 6);
            @endphp

            <div class="relative mt-16 space-y-8 before:absolute before:left-0 before:top-0 before:bottom-0 before:w-16 before:bg-gradient-to-r before:from-[#1B273F] before:to-transparent before:z-10 after:absolute after:right-0 after:top-0 after:bottom-0 after:w-16 after:bg-gradient-to-l after:from-[#1B273F] after:to-transparent after:z-10">
                <div class="flex overflow-hidden group">
                    <div class="flex gap-8 animate-scroll group-hover:pause">
                        @foreach($row1 as $client)
                            <div class="flex-shrink-0 w-56 h-28 bg-white/10 backdrop-blur-md rounded-xl p-4 flex items-center justify-center border border-white/10 hover:bg-white/20 transition-all duration-300">
                                <img src="{{ asset('images/clients/' . $client[1]) }}" alt="{{ $client[0] }} logo" class="max-h-14 max-w-full opacity-90 hover:opacity-100 transition-opacity duration-300" loading="lazy">
                            </div>
                        @endforeach
                        @foreach($row1 as $client)
                            <div class="flex-shrink-0 w-56 h-28 bg-white/10 backdrop-blur-md rounded-xl p-4 flex items-center justify-center border border-white/10 hover:bg-white/20 transition-all duration-300">
                                <img src="{{ asset('images/clients/' . $client[1]) }}" alt="{{ $client[0] }} logo" class="max-h-14 max-w-full opacity-90 hover:opacity-100 transition-opacity duration-300" loading="lazy">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex overflow-hidden group">
                    <div class="flex gap-8 animate-scroll-reverse group-hover:pause">
                        @foreach($row2 as $client)
                            <div class="flex-shrink-0 w-56 h-28 bg-white/10 backdrop-blur-md rounded-xl p-4 flex items-center justify-center border border-white/10 hover:bg-white/20 transition-all duration-300">
                                <img src="{{ asset('images/clients/' . $client[1]) }}" alt="{{ $client[0] }} logo" class="max-h-14 max-w-full opacity-90 hover:opacity-100 transition-opacity duration-300" loading="lazy">
                            </div>
                        @endforeach
                        @foreach($row2 as $client)
                            <div class="flex-shrink-0 w-56 h-28 bg-white/10 backdrop-blur-md rounded-xl p-4 flex items-center justify-center border border-white/10 hover:bg-white/20 transition-all duration-300">
                                <img src="{{ asset('images/clients/' . $client[1]) }}" alt="{{ $client[0] }} logo" class="max-h-14 max-w-full opacity-90 hover:opacity-100 transition-opacity duration-300" loading="lazy">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-20 bg-white">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">FAQ</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">Frequently Asked Questions</h2>
            </div>

            <div class="max-w-3xl mx-auto mt-12 space-y-4" x-data="{ open: null }">
                <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden" data-aos="fade-up">
                    <button @click="open = open === 1 ? null : 1" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">What are your rates?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 1" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Our services are tailored to clients needs and industry, however our rate for each service is subject to negotiations.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="50">
                    <button @click="open = open === 2 ? null : 2" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">How can you help with immigration matters?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 2" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Our immigration consultancy services include work permit applications, visa assistance, immigration compliance, expatriate relocation services, and general immigration advisory services.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <button @click="open = open === 3 ? null : 3" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">What industries do you serve?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 3" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">We serve mining, manufacturing, healthcare, education, hospitality, financial services, technology, and non-profit organizations with tailored solutions.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                    <button @click="open = open === 4 ? null : 4" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">How do I get started?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 4" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Simply contact us through our website, email, or phone. We'll schedule a free consultation to understand your needs and develop a customized solution for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Job Openings Preview --}}
    @if(isset($jobs) && $jobs->count() > 0)
        <section class="py-20 gradient-bg">
            <div class="section-padding">
                <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                    <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-200 bg-white/20">Join Our Team</span>
                    <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl font-sans">Current Job Openings</h2>
                    <p class="mt-4 text-gray-200">Join dynamic teams and grow your career with us.</p>
                </div>

                <div class="grid gap-6 mt-12 md:grid-cols-2">
                    @foreach($jobs as $job)
                        <div class="p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-primary-500 font-sans">{{ $job->title }}</h3>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-secondary-100 text-secondary-700">{{ ucfirst($job->type) }}</span>
                            </div>
                            <p class="text-gray-600 text-sm">{{ Str::limit($job->summary, 150) }}</p>
                            <div class="flex items-center gap-2 mt-4 text-sm text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                {{ $job->location ?? 'Lusaka, Zambia' }}
                            </div>
                            <div class="flex items-center gap-3 mt-5 pt-4 border-t border-gray-100">
                                <a href="{{ route('career.detail', $job->slug) }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Apply Now
                                </a>
                                <button onclick="navigator.clipboard.writeText('{{ route('career.detail', $job->slug) }}').then(() => alert('Job link copied to clipboard!'))" class="btn-outline text-sm !px-4 !py-2.5 inline-flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                                    Share
                                </button>
                                <a href="{{ route('career.detail', $job->slug) }}" class="inline-flex items-center ml-auto text-sm font-semibold text-secondary-500 hover:text-secondary-600">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12 text-center" data-aos="fade-up">
                    <a href="{{ route('careers') }}" class="btn-primary inline-flex items-center gap-2">
                        View All Job Opportunities
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </section>
    @endif

    {{-- Final CTA --}}
    <section class="relative overflow-hidden py-24 parallax-section">
        <div class="absolute inset-0 parallax-bg">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1920&q=80" alt="Workspace" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 to-primary-500/80"></div>

        <div class="relative section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-white md:text-5xl font-sans">Ready to Build a Stronger Workforce?</h2>
                <p class="mt-4 text-lg text-gray-200">Book a free, no-obligation consultation. Let's discuss how we can help your business thrive.</p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="{{ route('contact') }}" class="btn-accent text-base !px-8 !py-4 inline-flex items-center gap-2 shadow-xl shadow-accent-400/20">
                        Book Free Consultation
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('services') }}" class="btn-outline-light text-base !px-8 !py-4">Explore Services</a>
                </div>
                <div class="flex flex-wrap justify-center gap-8 mt-8 text-sm text-gray-300">
                    <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg> info@falanesolutions.com</span>
                    <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg> +260 764 145 468</span>
                </div>
            </div>
        </div>
    </section>
@endsection
