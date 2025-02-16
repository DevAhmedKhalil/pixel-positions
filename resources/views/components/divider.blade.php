@props(['text' => null])

<div class="relative flex items-center justify-center my-4">
    <hr class="w-full border-gray-300">

    @if($text)
        <span class="absolute bg-white px-3 text-gray-500 text-sm font-medium">
            {{ $text }}
        </span>
    @endif
</div>
