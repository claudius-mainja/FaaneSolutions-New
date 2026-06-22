<div>
    @if($success)
        <div class="p-8 text-center bg-green-50 rounded-xl">
            <svg class="w-16 h-16 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <h3 class="mt-4 text-2xl font-bold text-green-700 font-sans">Application Submitted!</h3>
            <p class="mt-2 text-green-600">Thank you for applying. We will review your application and get back to you soon.</p>
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
                    <label class="block mb-2 text-sm font-medium text-gray-700">Phone</label>
                    <input type="tel" wire:model="phone" class="input-field @error('phone') border-red-500 @enderror" placeholder="+27 11 234 5678">
                    @error('phone') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Cover Letter</label>
                <textarea wire:model="cover_letter" rows="5" class="input-field @error('cover_letter') border-red-500 @enderror" placeholder="Tell us why you're a great fit for this role..."></textarea>
                @error('cover_letter') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Resume / CV <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="file" wire:model="resume" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx">
                        <div class="flex items-center gap-3 p-3 border border-gray-300 border-dashed rounded-lg @error('resume') border-red-500 @enderror">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                            <span class="text-sm text-gray-500">@if($resume) {{ $resume->getClientOriginalName() }} @else Drop your resume here or click to browse @endif</span>
                        </div>
                    </div>
                    @error('resume') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    <div wire:loading wire:target="resume" class="mt-2 text-sm text-secondary-500">Uploading...</div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Cover Letter File (optional)</label>
                    <div class="relative">
                        <input type="file" wire:model="cover_letter_file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx">
                        <div class="flex items-center gap-3 p-3 border border-gray-300 border-dashed rounded-lg @error('cover_letter_file') border-red-500 @enderror">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                            <span class="text-sm text-gray-500">@if($cover_letter_file) {{ $cover_letter_file->getClientOriginalName() }} @else Upload cover letter @endif</span>
                        </div>
                    </div>
                    @error('cover_letter_file') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                    <div wire:loading wire:target="cover_letter_file" class="mt-2 text-sm text-secondary-500">Uploading...</div>
                </div>
            </div>

            <button type="submit" class="btn-primary w-full justify-center text-base" wire:loading.attr="disabled">
                <span wire:loading.remove>Submit Application</span>
                <span wire:loading>Submitting...</span>
            </button>
        </form>
    @endif
</div>
