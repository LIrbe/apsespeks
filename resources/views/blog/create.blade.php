<x-blog.middle>
    <div class="blog-head">
        <h1>Jauns raksts</h1>
    </div>
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('posts.update', $post) }}", enctype="multipart/form-data">
        @csrf_token
        @method('PUT')
        <label for="title">Nosaukums</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{old('title', $post->title)}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content" value="{{old('content', $post->content)}}">
        <label for="date">Palaišanas datums</label>
        <input type="datetime" id="raksta-datums" name="date" value="{{old('date', $post->date)}}">
        <label for="pictures">Bildes</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{old('pictures', $post->pictures)}}">
        <button type="button" onclick="">Saglabāt</button>
        <button type="button" onclick="">Atcelt</button>
    </form>
    {{html()->form('/post',)->open()}}
    {{html()->label('Nosaukums', 'title')}}
    {{html()->text('title')}}
    {{html()->textarea('content')}}
    {{html()->label('Palaišanas datums', 'date')}}
    {{html()->datetime('date')}}
    {{html()->label('Piespraust?', 'pin')}}
    {{html()->checkbox('pin')}}
    {{html()->label('Attēli', 'pictures')}}
    {{html()->file('pictures')}}
    {{html()->button('Saglabāt')}}
    {{html()->button('Atcelt')}}
    {{html()->form()->close()}}
</x-blog.middle>