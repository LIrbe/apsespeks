<x-base>
    @if ($urls != NULL)
        @foreach ($urls as $url)
            <img src="{{ $url }}">
        @endforeach
    @endif
</x-base>