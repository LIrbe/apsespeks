<x-base>
    <div class="blog-article">
        <div class="article-body">
        <h1>{{$raksts->title}}</h1>
        <p>
            {{$raksts->content}}
        </p>
        <div>Publicēšanas datums: {{ $raksts->date }}</div>
        </div>
    </div>
</x-base>