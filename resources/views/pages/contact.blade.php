@extends('layouts.master')

@section('title', 'Contact Us - Falane Solutions')

@section('content')
    {{-- Hero -- full bleed parallax --}}
    <section class="relative min-h-[60vh] flex items-center parallax-section">
        <div class="absolute inset-0 parallax-bg img-ken-burns">
            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=1920&q=85" alt="Contact Us" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 via-primary-500/80 to-primary-500/60"></div>
        <div class="relative section-padding w-full">
            <div class="text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full glass text-white/90 backdrop-blur-md">Get in Touch</span>
                <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl font-sans">Let's Talk.</h1>
                <p class="max-w-2xl mx-auto mt-4 text-lg text-gray-200">We are a place where expertise meets results!</p>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-20 bg-gray-50">
        <div class="section-padding">
            <div class="grid gap-12 lg:grid-cols-2">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-primary-500 font-sans">Send Us a Message</h2>
                    <p class="mt-2 text-gray-600">Ready to transform your business? We're here to help.</p>
                    <div class="mt-8">
                        @livewire('contact-form')
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="space-y-6">
                        <div class="relative overflow-hidden rounded-2xl shadow-xl img-zoom-card h-64">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=85" alt="Contact" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-500/60 to-transparent"></div>
                            <div class="absolute bottom-6 left-6">
                                <h2 class="text-3xl font-bold text-white font-sans">Contact Information</h2>
                                <p class="text-gray-200">Reach out through any of the following channels.</p>
                            </div>
                        </div>

                        <div class="grid gap-4">
                            <div class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 tilt-card">
                                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-secondary-100 text-secondary-600 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary-500 font-sans">Call Us</h3>
                                    <p class="text-sm text-gray-500">Available during business hours</p>
                                    <p class="font-medium text-gray-700">+260 764 145 468</p>
                                    <p class="font-medium text-gray-700">+260 776 677 889</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 tilt-card">
                                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-secondary-100 text-secondary-600 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary-500 font-sans">Email Us</h3>
                                    <p class="text-sm text-gray-500">We'll respond within 24 hours</p>
                                    <p class="font-medium text-gray-700">Info@falanesolutions.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 tilt-card">
                                <div class="flex items-center justify-center w-12 h-12 rounded-2xl bg-secondary-100 text-secondary-600 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary-500 font-sans">Visit Us</h3>
                                    <p class="text-sm text-gray-500">Come for a personalized consultation</p>
                                    <p class="font-medium text-gray-700">Sunningdale Plot No. 12, Mwinilunga Road, Kabulonga, Lusaka</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-2xl shadow-lg h-48">
                            <img src="https://images.unsplash.com/photo-1577083288073-40892c0860a4?w=800&q=80" alt="Map" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-primary-500/40 flex items-center justify-center">
                                <a href="https://maps.google.com/?q=Sunningdale+Plot+No+12+Mwinilunga+Road+Kabulonga+Lusaka+Zambia" target="_blank" rel="noopener noreferrer" class="btn-accent inline-flex items-center gap-2 text-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Get Directions on Google Maps
                                </a>
                            </div>
                        </div>

                        <div>
                            <h3 class="mb-4 text-lg font-bold text-primary-500 font-sans">Follow Us</h3>
                            <div class="flex gap-3">
                                <a href="https://linkedin.com/company/faanesolutions" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-12 h-12 text-gray-500 transition-all duration-300 border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="LinkedIn">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <a href="https://facebook.com/faanesolutions" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-12 h-12 text-gray-500 transition-all duration-300 border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Facebook">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="https://twitter.com/faanesolutions" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-12 h-12 text-gray-500 transition-all duration-300 border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Twitter/X">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                </a>
                                <a href="https://instagram.com/faanesolutions" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-12 h-12 text-gray-500 transition-all duration-300 border border-gray-300 rounded-full hover:bg-secondary-400 hover:text-white hover:border-secondary-400" aria-label="Instagram">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-20 bg-white">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">FAQ</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">Frequently Asked Questions</h2>
            </div>

            <div class="max-w-3xl mx-auto mt-12 space-y-4" x-data="{ open: null }">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="open = open === 1 ? null : 1" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">What are your rates?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 1" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Our services are tailored to clients needs and industry, however our rate for each service is subject to negotiations.</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="open = open === 2 ? null : 2" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">How can you help with immigration matters?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 2" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Our immigration services include work permit applications, visa assistance, immigration compliance, expatriate relocation services, and advisory services.</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="open = open === 3 ? null : 3" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">What industries do you serve?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 3" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">We serve mining, manufacturing, healthcare, education, hospitality, financial services, technology, and non-profit organizations.</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="open = open === 4 ? null : 4" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">How do I get started?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 4" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Contact us through our website, email, or phone. We'll schedule a free consultation to understand your needs.</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="open = open === 5 ? null : 5" class="flex items-center justify-between w-full p-6 text-left">
                        <span class="font-semibold text-primary-500 font-sans">Do you offer services for small businesses?</span>
                        <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" :class="open === 5 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === 5" x-collapse class="px-6 pb-6">
                        <p class="text-gray-600">Yes! We offer scalable solutions for businesses of all sizes with cost-effective options tailored to your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-20 parallax-section">
        <div class="absolute inset-0 parallax-bg">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&q=80" alt="Office" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-500/95 to-primary-500/80"></div>
        <div class="relative section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-white md:text-4xl font-sans">Let's Build Something Great Together</h2>
                <p class="mt-4 text-lg text-gray-300">Book a free consultation and discover how our HR and immigration solutions can transform your business.</p>
                <a href="{{ route('services') }}" class="btn-accent mt-6 text-base !px-8 !py-4 inline-flex items-center gap-2 shadow-xl shadow-accent-400/20">
                    Explore Our Services
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
@endsection