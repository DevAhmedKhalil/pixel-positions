@props(['error'])

@error($error)
<p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
@enderror