<x-base>
    <div class="blog-article">
        @if (Session::has('success'))
            <div class="errors">
                {{Session::get('success')}}
            </div>
        @endif 
        <div class="article-body">
        <h1>{{$raksts->title}}</h1>
        <p>
            {{$raksts->content}}
        </p>
        <div>{{ucfirst(__('special.release'))}} {{ucfirst(__('validation.attributes.date'))}}: {{ $raksts->date }}</div>
        </div>
        @if ($raksts->image != NULL)
            @foreach ($raksts->image as $picture)
                <img src="{{ $picture }}">
            @endforeach
        @endif
        @auth
            Veidotājs: {{$raksts->user->email}}
        @endauth
        <br>
        @if ($raksts->created_at > $raksts->updated_at)
            Atjaunināts: {{$raksts->created_at}}
        @else
            Atjaunināts: {{$raksts->updated_at}}
        @endif
        <div class="new button">
            <a href={{route('blog.edit', $raksts->id)}}>{{ucfirst(__('Edit'))}}</a>
        </div>
    </div>
</x-base>