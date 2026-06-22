<nav class="sticky top-0 z-50 bg-white shadow-md nav-container">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('images/logo.png') }}" alt="Falane Solutions" class="h-14 transition-transform duration-300 group-hover:scale-105" onerror="this.style.display='none'">
            </a>

            <div class="items-center hidden gap-6 lg:flex">
                <div class="flex items-center gap-1">
                    <a href="{{ route('home') }}" class="nav-link px-3 py-2 text-sm">{{ request()->routeIs('home') ? 'Home' : 'Home' }}</a>
                    <a href="{{ route('about') }}" class="nav-link px-3 py-2 text-sm">About Us</a>
                    <div class="relative" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = !open" class="nav-link px-3 py-2 text-sm">
                            What We Do
                            <svg class="inline-block w-3 h-3 ml-1 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="absolute left-0 w-56 mt-2 top-full">
                            <div class="py-2 bg-white rounded-xl shadow-xl ring-1 ring-black/5">
                                <a href="{{ route('services') }}" class="block px-4 py-2.5 text-sm font-semibold text-primary-500 border-b border-gray-100 hover:bg-secondary-50 font-body">All Services</a>
                                <a href="{{ route('service.detail', 'immigration-services') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Immigration Services</a>
                                <a href="{{ route('service.detail', 'hr-outsourcing') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">HR Outsourcing</a>
                                <a href="{{ route('service.detail', 'recruitment-services') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Recruitment Services</a>
                                <a href="{{ route('service.detail', 'management-training') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Management & Employee Training</a>
                                <a href="{{ route('service.detail', 'payroll') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Payroll & Statutory Returns</a>
                                <a href="{{ route('service.detail', 'accounting-auditing') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Accounting & Auditing</a>
                                <a href="{{ route('service.detail', 'labour-dispute') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Labour Dispute Resolution</a>
                                <a href="{{ route('service.detail', 'company-registration') }}" class="block px-4 py-2.5 text-sm text-gray-700 transition-colors hover:bg-secondary-50 hover:text-secondary-600 font-body">Company Registration</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('careers') }}" class="nav-link px-3 py-2 text-sm">Careers</a>
                    <a href="{{ route('contact') }}" class="nav-link px-3 py-2 text-sm">Contact Us</a>
                </div>
                <a href="{{ asset('images/CompanyProfile.pdf') }}" target="_blank" download class="btn-outline text-sm !px-4 !py-2 !border-primary-500 !text-primary-500 hover:!bg-primary-500 hover:!text-white">
                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Company Profile
                </a>
                <a href="{{ route('contact') }}" class="btn-accent text-sm !px-5 !py-2.5 !rounded-full">
                    Book Consultation
                </a>
            </div>

            <button class="lg:hidden text-primary-500" @click="mobileOpen = !mobileOpen" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mobileOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="border-t border-gray-200 bg-white lg:hidden" @click.away="mobileOpen = false">
        <div class="px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-4 py-3 text-sm font-medium transition-colors rounded-lg text-primary-500 hover:bg-primary-50" @click="mobileOpen = false">Home</a>
            <a href="{{ route('about') }}" class="block px-4 py-3 text-sm font-medium transition-colors rounded-lg text-primary-500 hover:bg-primary-50" @click="mobileOpen = false">About Us</a>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-sm font-medium transition-colors rounded-lg text-primary-500 hover:bg-primary-50">
                    What We Do
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-cloak class="ml-4 space-y-1">
                    <a href="{{ route('services') }}" class="block px-4 py-2 text-sm font-semibold text-primary-500 border-b border-gray-100 hover:bg-primary-50" @click="mobileOpen = false">All Services</a>
                    <a href="{{ route('service.detail', 'immigration-services') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Immigration Services</a>
                    <a href="{{ route('service.detail', 'hr-outsourcing') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">HR Outsourcing</a>
                    <a href="{{ route('service.detail', 'recruitment-services') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Recruitment Services</a>
                    <a href="{{ route('service.detail', 'management-training') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Management & Employee Training</a>
                    <a href="{{ route('service.detail', 'payroll') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Payroll & Statutory Returns</a>
                    <a href="{{ route('service.detail', 'accounting-auditing') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Accounting & Auditing</a>
                    <a href="{{ route('service.detail', 'labour-dispute') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Labour Dispute Resolution</a>
                    <a href="{{ route('service.detail', 'company-registration') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-primary-50" @click="mobileOpen = false">Company Registration</a>
                </div>
            </div>
            <a href="{{ route('careers') }}" class="block px-4 py-3 text-sm font-medium transition-colors rounded-lg text-primary-500 hover:bg-primary-50" @click="mobileOpen = false">Careers</a>
            <a href="{{ route('contact') }}" class="block px-4 py-3 text-sm font-medium transition-colors rounded-lg text-primary-500 hover:bg-primary-50" @click="mobileOpen = false">Contact Us</a>
            <a href="{{ asset('images/CompanyProfile.pdf') }}" target="_blank" download class="flex items-center gap-2 px-4 py-3 text-sm font-medium transition-colors rounded-lg text-primary-500 hover:bg-primary-50" @click="mobileOpen = false">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Company Profile
            </a>
            <a href="{{ route('contact') }}" class="block mt-4 btn-accent text-center text-sm" @click="mobileOpen = false">Book Consultation</a>
        </div>
    </div>
</nav>
