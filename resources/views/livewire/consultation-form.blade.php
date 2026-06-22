<div>
    @if($success)
        <div class="p-8 text-center bg-green-50 rounded-xl">
            <svg class="w-16 h-16 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <h3 class="mt-4 text-2xl font-bold text-green-700 font-sans">Thank You!</h3>
            <p class="mt-2 text-green-600">Your consultation request has been received. We will contact you within 24 hours to schedule your consultation.</p>
        </div>
    @else
        <form wire:submit="submit" class="space-y-6">
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">First Name <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="first_name" class="input-field @error('first_name') border-red-500 @enderror" placeholder="John">
                    @error('first_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="last_name" class="input-field @error('last_name') border-red-500 @enderror" placeholder="Doe">
                    @error('last_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                    <input type="email" wire:model="email" class="input-field @error('email') border-red-500 @enderror" placeholder="john@example.com">
                    @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Phone <span class="text-red-500">*</span></label>
                    <input type="tel" wire:model="phone" class="input-field @error('phone') border-red-500 @enderror" placeholder="+27 11 234 5678">
                    @error('phone') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Company</label>
                    <input type="text" wire:model="company" class="input-field" placeholder="Company name">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Service Interest</label>
                    <select wire:model="service_interest" class="input-field">
                        <option value="">Select a service</option>
                        @foreach($services as $service)
                            <option value="{{ $service }}">{{ $service }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Message <span class="text-red-500">*</span></label>
                <textarea wire:model="message" rows="5" class="input-field @error('message') border-red-500 @enderror" placeholder="Tell us about your requirements..."></textarea>
                @error('message') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="btn-accent w-full justify-center text-base" wire:loading.attr="disabled">
                <span wire:loading.remove>Request Consultation</span>
                <span wire:loading>Submitting...</span>
            </button>
        </form>
    @endif
</div>
