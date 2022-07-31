<form wire:submit.prevent="saveContact">
    <input type="text" wire:model="name">
    @error('name') <span class="error">{{ $message }}</span> @enderror
 
    <input type="text" wire:model="email">
    @error('email') <span class="error">{{ $message }}</span> @enderror
 
    <button type="submit">Save Contact</button>
</form>