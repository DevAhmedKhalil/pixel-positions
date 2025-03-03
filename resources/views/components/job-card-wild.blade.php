@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach
    </div>

    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-white px-3 py-1 rounded hover:text-red-500">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>

</x-panel>

