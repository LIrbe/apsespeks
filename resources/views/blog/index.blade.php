<x-base>
    <div>{{session()->get('message')}}</div>
    <div>
        <div class="page-head">
            <h1>
                Jaunākie raksti
            </h1>
        </div>
        <div class="blog-container">
            <div class="full-width">
                <a href={{route('blog.create')}} class="createbutton">Izveidot jaunu rakstu</a>
            </div>
            <div class="blog-content">
                @foreach ($raksti as $raksts)
                <div class="blog-article">
                    <div class="article-body">
                        <h1>{{$raksts->title}}</h1>
                        <p>
                            {{$raksts->content}}
                        </p>
                        </div>
                    <div class="article-footer">
                        <a href ={{ route('blog.show', $raksts->id) }} class="overflow-sec">Redzēt Pilno Rakstu</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-base>