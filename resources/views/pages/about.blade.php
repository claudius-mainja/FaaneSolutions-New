@extends('layouts.master')

@section('title', 'About Us - Falane Solutions')

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[65vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&q=85" alt="About Falane Solutions" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">About Us</span>
                <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl font-sans">About Falane Solutions</h1>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-200">Your trusted partner for comprehensive HR and Immigration consultancy services in Zambia and beyond.</p>
            </div>
        </div>
    </section>

    {{-- Our Story -- visual image gallery --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="relative" data-aos="fade-right">
                    <div class="rounded-2xl overflow-hidden shadow-2xl img-zoom-card">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=85" alt="Our Story" class="w-full h-[450px] object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 rounded-2xl overflow-hidden shadow-xl w-40 h-40 border-4 border-white floating-card">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=300&q=80" alt="Team" class="w-full h-full object-cover">
                    </div>
                </div>
                <div data-aos="fade-left">
                    <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">Our Story</span>
                    <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">The Falane Solutions Journey</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">Founded in 2019, Falane Solutions Limited is a Zambian-owned company with a mission to provide exceptional HR and Immigration consultancy services that empower organizations and individuals alike.</p>
                    <p class="mt-4 text-gray-600 leading-relaxed">Our team consists of seasoned professionals with deep domain knowledge and extensive experience in both HR management and immigration regulations, making us uniquely positioned to provide holistic solutions to our clients.</p>

                    <div class="flex gap-8 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-text font-sans">200+</div>
                            <div class="text-sm text-gray-500 mt-1">Clients Served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-text font-sans">500+</div>
                            <div class="text-sm text-gray-500 mt-1">Placements</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-text font-sans">7+</div>
                            <div class="text-sm text-gray-500 mt-1">Years</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Vision with 6 Pillars -- image cards --}}
    <section class="py-20 bg-white">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">Our Vision</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">Shaping the Future of HR & Immigration</h2>
                <p class="mt-4 text-gray-600">We envision becoming the leading HR and Immigration consultancy in Zambia and beyond.</p>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-2 lg:grid-cols-3 stagger-3d">
                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&q=80" alt="Trusted Expertise" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-3 left-4 flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h3 class="font-bold text-white font-sans">Trusted Expertise</h3>
                        </div>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-sm text-gray-600">Our team of seasoned professionals provides expert guidance and practical solutions to help businesses overcome HR challenges.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&q=80" alt="Client-Centric" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-3 left-4 flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                            </div>
                            <h3 class="font-bold text-white font-sans">Client-Centric</h3>
                        </div>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-sm text-gray-600">We are dedicated to understanding your unique needs, goals, and constraints to build relationships based on trust and transparency.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=400&q=80" alt="Innovative Solutions" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-3 left-4 flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <h3 class="font-bold text-white font-sans">Innovative Solutions</h3>
                        </div>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-sm text-gray-600">We embrace innovation and technological advancements to deliver cutting-edge solutions that streamline HR and immigration processes.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=400&q=80" alt="Compliance" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-3 left-4 flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h3 class="font-bold text-white font-sans">Compliance & Risk</h3>
                        </div>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-sm text-gray-600">Robust compliance solutions enabling organizations to meet legal requirements through proactive risk assessment and mitigation strategies.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?w=400&q=80" alt="Global Reach" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-3 left-4 flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h3 class="font-bold text-white font-sans">Global Reach</h3>
                        </div>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-sm text-gray-600">We aspire to have a global presence, serving clients across industries and geographies through strategic partnerships worldwide.</p>
                    </div>
                </div>

                <div class="group overflow-hidden rounded-2xl shadow-lg tilt-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&q=80" alt="Continuous Learning" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-500/70 to-transparent"></div>
                        <div class="absolute bottom-3 left-4 flex items-center gap-3">
                            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-white/20 backdrop-blur-md text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            </div>
                            <h3 class="font-bold text-white font-sans">Continuous Learning</h3>
                        </div>
                    </div>
                    <div class="p-5 bg-white">
                        <p class="text-sm text-gray-600">We embrace a culture of continuous learning and adaptation, investing in professional development to provide the most relevant solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-20 parallax-section">
        <div class="absolute inset-0 parallax-bg">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1920&q=80" alt="Workspace" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 to-primary-500/80"></div>
        <div class="relative section-padding">
            <div class="max-w-4xl mx-auto">
                <div class="grid items-center gap-8 md:grid-cols-2">
                    <div data-aos="fade-right">
                        <h2 class="text-3xl font-bold text-white md:text-4xl font-sans">Let's Work Together</h2>
                        <p class="mt-4 text-gray-300">Book a free consultation and discover how Falane Solutions can transform your HR and immigration processes.</p>
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