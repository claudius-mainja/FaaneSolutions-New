<div>
    @if($success)
        <p class="text-sm text-green-400">Thanks for subscribing!</p>
    @else
        <form wire:submit="submit" class="flex gap-2">
            <input type="email" wire:model="email" placeholder="Your email" class="flex-1 px-3 py-2 text-sm text-white placeholder-gray-400 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:border-secondary-400 @error('email') border-red-500 @enderror">
            <button type="submit" class="px-4 py-2 text-sm font-semibold transition-colors rounded-lg bg-secondary-400 text-primary-500 hover:bg-secondary-300" wire:loading.attr="disabled">
                <span wire:loading.remove>Subscribe</span>
                <span wire:loading>...</span>
            </button>
        </form>
        @error('email') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
    @endif
</div>
