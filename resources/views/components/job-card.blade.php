@props(['job'])

<x-panel
    class="flex flex-col text-center">

    <div class="self-start">{{ $job->employer->name }}</div>

    <div class="py-8 font-bold">
        <h3 class="text-xl font-bold transition-colors group-hover:text-blue-600 duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size="small"/>
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>

</x-panel>

