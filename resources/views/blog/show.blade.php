<x-base>
    <div class="blog-article">
        <div class="article-body">
        <h1>{{$raksts->title}}</h1>
        <p>
            {{$raksts->content}}
        </p>
        <div>Publicēšanas datums: {{ $raksts->date }}</div>
        </div>
        @if ($raksts->pictures != "[]")
            @foreach ($raksts->pictures as $picture)
                <img src="{{ $picture }}">
            @endforeach
        @endif
        <a href={{route('blog.edit', $raksts->id)}} class="createbutton">Rediģēt</a>
    </div>
</x-base>