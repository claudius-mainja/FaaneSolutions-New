@extends('layouts.master')

@section('title', 'Our Services - Falane Solutions')

@section('content')
    {{-- Hero -- full bleed parallax image --}}
    <section class="relative min-h-[70vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1920&q=85" alt="Our Services" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>

        <div class="relative section-padding w-full">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">What We Do</span>
                <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl font-sans">Comprehensive Business Solutions</h1>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-200">From recruitment and immigration to payroll and compliance — end-to-end solutions that help your organization thrive.</p>
                <a href="{{ route('contact') }}" class="mt-8 btn-accent inline-flex items-center gap-2 shadow-xl shadow-accent-400/20">
                    Book Free Consultation
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Services Grid -- image cards with hover effects --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="grid gap-8 md:grid-cols-2">
                {{-- Immigration Services --}}
                <div id="immigration-services" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=85" alt="Immigration Services" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Immigration Services</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Expert navigation of complex immigration processes, work permits, visas, and compliance. Personalized solutions backed by up-to-date regulatory knowledge.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>VISA Processing</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Employment Permits</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Investor Permits</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Residence Permits</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- HR Outsourcing --}}
                <div id="hr-outsourcing" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=85" alt="HR Outsourcing" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">HR Outsourcing</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Focus on your core business while we handle payroll, benefits, compliance, and recruitment. Scalable solutions for businesses of all sizes.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Payroll Management</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Benefits Administration</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Legal Compliance</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Recruitment</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Recruitment Services --}}
                <div id="recruitment-services" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=800&q=85" alt="Recruitment Services" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Recruitment Services</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Comprehensive recruitment including job advertising, screening, interviews, selection, and training. We deliver qualified candidates aligned with your culture.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Job Advertising</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Candidate Screening</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Interviews & Selection</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Training</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Management & Employee Training --}}
                <div id="management-training" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&q=85" alt="Management & Employee Training" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Management & Employee Training</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Empower your workforce with leadership skills, team building, and professional development. Custom programs tailored to your organization's goals.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Leadership Skills</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Team Building</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Custom Programs</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Professional Development</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Payroll & Statutory Returns --}}
                <div id="payroll" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1554224154-26032dfc0dae?w=800&q=85" alt="Payroll & Statutory Returns" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Payroll & Statutory Returns</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Accurate salary processing, tax deductions, and statutory compliance. We stay current with regulations so you don't have to.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Salary Processing</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Tax Deductions</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Statutory Compliance</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Timely Reports</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Accounting & Auditing --}}
                <div id="accounting-auditing" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1554774853-7b03ca58b1a0?w=800&q=85" alt="Accounting & Auditing" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Accounting & Auditing</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Accurate financial reporting, regulatory compliance, and strategic insights. We help optimize resources, minimize risks, and drive sustainable growth.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Financial Reporting</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Compliance</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Risk Assessment</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Strategic Planning</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Labour Dispute Resolution --}}
                <div id="labour-dispute" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb?w=800&q=85" alt="Labour Dispute Resolution" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Labour Dispute Resolution</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Swift and fair resolution of workplace conflicts. Expert mediation, conflict resolution, and risk mitigation to maintain a harmonious work environment.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Mediation</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Conflict Resolution</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Legal Representation</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Risk Mitigation</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Company Registration --}}
                <div id="company-registration" class="group overflow-hidden rounded-2xl shadow-xl bg-white border border-gray-100 tilt-card service-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=85" alt="Company Registration" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-6 flex items-center gap-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-white font-sans">Company Registration</h2>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-600">Comprehensive business registration services. We guide entrepreneurs through entity establishment, legal compliance, tax registration, and licensing.</p>
                        <ul class="grid grid-cols-2 gap-x-4 gap-y-2 mt-4">
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Business Registration</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Legal Compliance</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Tax Registration</li>
                            <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-secondary-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Business Licensing</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="mt-5 btn-primary inline-flex text-sm items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Process -- visual image cards --}}
    <section class="py-20 bg-white">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">Our Process</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">How We Work</h2>
                <p class="mt-4 text-gray-600">A structured approach to ensure successful outcomes for all our services.</p>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-4">
                <div class="relative p-6 text-center bg-white shadow-lg card rounded-xl img-scale-in tilt-card" data-aos="fade-up">
                    <div class="relative mx-auto w-20 h-20 mb-4 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=200&q=80" alt="Consultation" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-secondary-400/40 flex items-center justify-center">
                            <span class="text-2xl font-bold text-white font-sans">1</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-primary-500 font-sans">Consultation</h3>
                    <p class="mt-2 text-sm text-gray-600">Thorough consultation to understand your specific needs and objectives.</p>
                </div>
                <div class="relative p-6 text-center bg-white shadow-lg card rounded-xl img-scale-in tilt-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative mx-auto w-20 h-20 mb-4 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=200&q=80" alt="Strategy" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-secondary-400/40 flex items-center justify-center">
                            <span class="text-2xl font-bold text-white font-sans">2</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-primary-500 font-sans">Strategy</h3>
                    <p class="mt-2 text-sm text-gray-600">Tailored strategy aligned with your goals and requirements.</p>
                </div>
                <div class="relative p-6 text-center bg-white shadow-lg card rounded-xl img-scale-in tilt-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative mx-auto w-20 h-20 mb-4 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=200&q=80" alt="Implementation" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-secondary-400/40 flex items-center justify-center">
                            <span class="text-2xl font-bold text-white font-sans">3</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-primary-500 font-sans">Implementation</h3>
                    <p class="mt-2 text-sm text-gray-600">Precision execution with regular updates at every step.</p>
                </div>
                <div class="relative p-6 text-center bg-white shadow-lg card rounded-xl img-scale-in tilt-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative mx-auto w-20 h-20 mb-4 overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=200&q=80" alt="Support" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-secondary-400/40 flex items-center justify-center">
                            <span class="text-2xl font-bold text-white font-sans">4</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-primary-500 font-sans">Continuous Support</h3>
                    <p class="mt-2 text-sm text-gray-600">Ongoing support and refinement for long-term success.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">Why Choose Us</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">Why Falane Solutions</h2>
                <p class="mt-4 text-gray-600">Exceptional service delivered with expertise, speed, and value.</p>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-2 lg:grid-cols-4 stagger-3d">
                <div class="p-6 text-center transition-all duration-300 bg-white shadow-lg card rounded-xl hover:-translate-y-2 tilt-card" data-aos="fade-up">
                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-secondary-100 text-secondary-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-primary-500 font-sans">Expert Team</h3>
                    <p class="mt-2 text-sm text-gray-600">Years of industry experience and specialized knowledge.</p>
                </div>
                <div class="p-6 text-center transition-all duration-300 bg-white shadow-lg card rounded-xl hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-secondary-100 text-secondary-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-primary-500 font-sans">Fast Turnaround</h3>
                    <p class="mt-2 text-sm text-gray-600">Timely delivery that exceeds expectations.</p>
                </div>
                <div class="p-6 text-center transition-all duration-300 bg-white shadow-lg card rounded-xl hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-secondary-100 text-secondary-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-primary-500 font-sans">Cost-Effective</h3>
                    <p class="mt-2 text-sm text-gray-600">Premium services at competitive rates.</p>
                </div>
                <div class="p-6 text-center transition-all duration-300 bg-white shadow-lg card rounded-xl hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-secondary-100 text-secondary-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <h3 class="mt-5 text-lg font-bold text-primary-500 font-sans">Customized Solutions</h3>
                    <p class="mt-2 text-sm text-gray-600">Tailored services for optimal results.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-20 parallax-section">
        <div class="absolute inset-0 parallax-bg">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&q=80" alt="Modern office" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 to-primary-500/80"></div>
        <div class="relative section-padding">
            <div class="max-w-4xl mx-auto">
                <div class="grid items-center gap-8 md:grid-cols-2">
                    <div data-aos="fade-right">
                        <h2 class="text-3xl font-bold text-white md:text-4xl font-sans">Ready to Get Started?</h2>
                        <p class="mt-4 text-gray-300">Book a free consultation and let our experts design a solution tailored to your business needs.</p>
                        <div class="flex flex-wrap items-center gap-4 mt-6 text-sm text-gray-400">
                            <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg> info@falanesolutions.com</span>
                            <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg> +260 764 145 468</span>
                        </div>
                    </div>
                    <div class="text-center md:text-right" data-aos="fade-left">
                        <a href="{{ route('contact') }}" class="btn-accent text-base !px-8 !py-4 inline-flex items-center gap-2 shadow-xl shadow-accent-400/20">
                            Book Free Consultation
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection