@props(['employer', 'width'=>'90'])

{{--<img src="{{ assert($employer->logo) }}" alt="" class="rounded-xl" width="{{$width}}">--}}

<img src="https://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="job img" class="rounded-xl">
