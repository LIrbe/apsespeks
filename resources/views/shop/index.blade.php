<x-base>
    <div>{{session()->get('message')}}</div>
    @auth
        <div class="full-width new button">
            <a href={{route('blog.create')}} class="createbutton">{{ucfirst(__('Create'))}} {{ucfirst(__('special.ack_new'))}} {{ucfirst(__('special.ack_article'))}}</a>
        </div>
    @endauth
    @foreach ($raksti as $raksts)
        <div class="shop">
            <div class="article-body">
                <h1>{{$raksts->title}}</h1>
                <p>
                    {{$raksts->content}}
                </p>
                </div>
            <div class="article-footer">
                <a href ={{ route('shop.show', $raksts->id) }} class="overflow-sec">{{ucfirst(__('actions.view'))}} {{ucfirst(__('special.full'))}} {{ucfirst(__('special.ack_article'))}}</a>
            </div>
        </div>
    @endforeach
    </div>
</x-base>