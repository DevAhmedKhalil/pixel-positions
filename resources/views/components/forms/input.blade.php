@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => old($name)
    ];
@endphp

<x-forms.field :name="$name" :label="$label">
    <input {{ $attributes->merge($defaults) }}>

    @error($name)
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

</x-forms.field>
