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
    <section class="py-20 bg-gray-50" id="services">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-600 bg-secondary-100">Our Services</span>
                <h2 class="mt-4 text-3xl font-bold text-primary-500 md:text-4xl font-sans">Comprehensive Business Solutions</h2>
                <p class="mt-4 text-gray-600">We provide comprehensive business solutions to help your organization thrive in today's competitive landscape.</p>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-2 lg:grid-cols-3">
                {{-- Immigration Services --}}
                <div id="immigration-services" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/immigration services.png') }}" alt="Immigration Services" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Immigration Services</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">Our experienced team navigates the complexities of immigration processes, ensuring a smooth and streamlined experience for our clients. We offer personalized solutions, keeping up-to-date with the latest immigration regulations and providing expert guidance every step of the way.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">VISA Processing</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Employment Permits</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Investor Permits</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Residence Permits</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Appeals</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Inclusions</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'immigration-services') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- HR Outsourcing --}}
                <div id="hr-outsourcing" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="50">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/HR Outsourcing.png') }}" alt="HR Outsourcing" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">HR Outsourcing</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">We specialize in providing top-notch HR outsourcing solutions to companies of all sizes. Businesses can focus on their core operations by entrusting us with their HR needs. We handle critical HR functions such as payroll management, employee benefits administration, compliance with labor laws, and recruitment.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Payroll Management</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Benefits Administration</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Legal Compliance</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Recruitment</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'hr-outsourcing') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- Recruitment Services --}}
                <div id="recruitment-services" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/recruitment services.png') }}" alt="Recruitment Services" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Recruitment Services</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">Our expertise lies in comprehensive recruitment services including job advertising, screening, interviews, selection and training. We present qualified candidates who align with our client's specific requirements and organizational culture.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Job Advertising</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Candidate Screening</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Interviews</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Selection</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Training</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'recruitment-services') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- Management & Employee Training --}}
                <div id="management-training" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="150">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/training services.png') }}" alt="Management & Employee Training" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Management & Employee Training</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">We specialize in providing comprehensive management and employee training programs to empower organizations and their workforce. Our training solutions are designed to enhance leadership skills, foster teamwork, and develop a culture of continuous learning and growth. We also offer customized training as per clients' request.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Leadership Skills</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Team Building</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Custom Programs</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Professional Development</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'management-training') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- Payroll & Statutory Returns --}}
                <div id="payroll" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/payroll and statutory.png') }}" alt="Payroll & Statutory Returns" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Payroll & Statutory Returns</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">Our experienced team handles all aspects of payroll, including accurate and timely processing of salaries, deductions and taxes. We stay up to date with the latest statutory requirements, ensuring that all necessary returns and reports are submitted on time.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Salary Processing</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Tax Deductions</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Statutory Compliance</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Timely Reports</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'payroll') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- Accounting & Auditing --}}
                <div id="accounting-auditing" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="250">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/Accounting and auditing.png') }}" alt="Accounting & Auditing" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Accounting & Auditing</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">We offer comprehensive auditing and accounting services that empower businesses to thrive in today's dynamic financial landscape. With ultra-careful attention to detail, our expert team ensures accurate financial reporting, regulatory compliance, and strategic insights. We go beyond numbers, providing valuable analysis and recommendations to optimize resources, minimize risks, and drive sustainable growth.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Financial Reporting</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Compliance</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Risk Assessment</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Strategic Planning</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'accounting-auditing') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- Labour Dispute Resolution --}}
                <div id="labour-dispute" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/Labour Dispute Resolution.png') }}" alt="Labour Dispute Resolution" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Labour Dispute Resolution</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">Experience efficient and effective labour dispute resolution services tailored to your company's needs. Our expert team specializes in finding swift and fair solutions to labour disputes, ensuring minimal disruption to your operations. With a client-centric approach, we strive to foster positive working relationships and maintain a harmonious work environment.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Mediation</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Conflict Resolution</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Legal Representation</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Risk Mitigation</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'labour-dispute') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- Company Registration --}}
                <div id="company-registration" class="overflow-hidden bg-white rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="350">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('images/services/Company Registration.png') }}" alt="Company Registration" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <h3 class="p-6 text-2xl font-bold text-white font-sans">Company Registration</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-gray-700">We provide comprehensive company registration services, guiding entrepreneurs and businesses through the process of establishing their legal entities. Our expert team offers personalized support, ensuring a smooth and efficient registration process from start to finish.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Business Registration</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Legal Compliance</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Tax Registration</span>
                            <span class="px-3 py-1 text-xs font-medium text-gray-700 bg-gray-100 rounded">Business Licensing</span>
                        </div>
                        <div class="flex items-center gap-3 mt-5">
                            <a href="{{ route('service.detail', 'company-registration') }}" class="btn-primary text-sm !px-5 !py-2.5 inline-flex items-center gap-2">View Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            <a href="{{ route('contact') }}" class="btn-outline text-sm !px-5 !py-2.5 inline-flex items-center gap-2">Get Started <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Process -- visual image cards --}}
    <section class="py-20 gradient-bg">
        <div class="section-padding">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 text-sm font-semibold rounded-full text-secondary-200 bg-white/20">Our Process</span>
                <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl font-sans">How We Work</h2>
                <p class="mt-4 text-gray-200">We follow a structured approach to ensure successful outcomes for all our services.</p>
            </div>

            <div class="grid gap-8 mt-12 md:grid-cols-4">
                <div class="relative text-center" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white rounded bg-accent/90 font-sans">1</div>
                        <div class="flex-grow h-1 ml-4 bg-secondary-400/40"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white font-sans">Consultation</h3>
                    <p class="mt-2 text-sm text-gray-300">We begin with a thorough consultation to understand your specific needs and objectives.</p>
                </div>
                <div class="relative text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white rounded bg-secondary-500/90 font-sans">2</div>
                        <div class="flex-grow h-1 ml-4 bg-secondary-400/40"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white font-sans">Strategy Development</h3>
                    <p class="mt-2 text-sm text-gray-300">Our experts develop a tailored strategy aligned with your goals and requirements.</p>
                </div>
                <div class="relative text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white rounded bg-accent/90 font-sans">3</div>
                        <div class="flex-grow h-1 ml-4 bg-secondary-400/40"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white font-sans">Implementation</h3>
                    <p class="mt-2 text-sm text-gray-300">We execute the strategy with precision, keeping you informed at every step of the process.</p>
                </div>
                <div class="relative text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white rounded bg-secondary-500/90 font-sans">4</div>
                        <div class="flex-grow h-1 ml-4 hidden md:block" style="background-color: transparent;"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white font-sans">Continuous Support</h3>
                    <p class="mt-2 text-sm text-gray-300">We provide ongoing support and refinement to ensure long-term success and satisfaction.</p>
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