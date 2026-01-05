<x-base>
    <div>
        <div class="page-head">
            {{Session::get('test')}}
            <h1>
                {{ucfirst(__('special.newest'))}} {{ucfirst(trans_choice('special.article', 2))}}
            </h1>
        </div>
        <div class="blog-container">
            @auth
                <div class="full-width new button">
                    <a href={{route('blog.create')}} class="createbutton">{{ucfirst(__('Create'))}} {{ucfirst(__('special.ack_new'))}} {{ucfirst(__('special.ack_article'))}}</a>
                </div>
            @endauth
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
                        <a href ={{ route('blog.show', $raksts->id) }} class="overflow-sec">{{ucfirst(__('actions.view'))}} {{ucfirst(__('special.full'))}} {{ucfirst(__('special.ack_article'))}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-base>