@props(['label' , 'name'])

<div>
    @if($label)
        <x-forms.label :for="$name">{{ $label }}</x-forms.label>
    @endif

    <div class="mt-1">
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)"/>
    </div>
</div>
