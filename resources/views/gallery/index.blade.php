<x-base>
    @if ($urls != NULL)
        @foreach ($urls as $url)
            <img src="{{ $url }}">
        @endforeach
    @endif
    <!--Pagaidu struktūra-->
    <div id="gallery">
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-1"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-2"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-3"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-1"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-2"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-1"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-3"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-2"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-2"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-1"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-3"></div>
            </a>
        </div>
        <div class="gallery-cell">
            <a href="{{route('gallery.show', 'path')}}">
                <div class="gallery-placeholder gptype-1"></div>
            </a>
        </div>
    </div>
</x-base>