<div>
    @if($success)
        <div class="p-8 text-center bg-green-50 rounded-xl">
            <svg class="w-16 h-16 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <h3 class="mt-4 text-2xl font-bold text-green-700 font-sans">Message Sent!</h3>
            <p class="mt-2 text-green-600">Thank you for reaching out. We will get back to you within 24 hours.</p>
        </div>
    @else
        <form wire:submit="submit" class="space-y-6">
            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="name" class="input-field @error('name') border-red-500 @enderror" placeholder="Your name">
                    @error('name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                    <input type="email" wire:model="email" class="input-field @error('email') border-red-500 @enderror" placeholder="your@email.com">
                    @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Phone</label>
                    <input type="tel" wire:model="phone" class="input-field" placeholder="+27 11 234 5678">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Subject <span class="text-red-500">*</span></label>
                    <input type="text" wire:model="subject" class="input-field @error('subject') border-red-500 @enderror" placeholder="How can we help?">
                    @error('subject') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Message <span class="text-red-500">*</span></label>
                <textarea wire:model="message" rows="6" class="input-field @error('message') border-red-500 @enderror" placeholder="Tell us more about your inquiry..."></textarea>
                @error('message') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="btn-primary w-full justify-center text-base" wire:loading.attr="disabled">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>
        </form>
    @endif
</div>
