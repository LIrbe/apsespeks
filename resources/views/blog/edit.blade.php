<x-blog.middle>
    <div class="page-head">
        <h1>Mainīt rakstu</h1>
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
    <form method="POST" action="{{ route('blog.store', $raksts) }}", enctype="multipart/form-data">
        @csrf_token
        @method('PUT')
        <label for="title">Nosaukums</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{$raksts->title}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content" value="{{$raksts->content}}">
        <label for="date">Palaišanas datums</label>
        <input type="datetime" id="raksta-datums" name="date" value="{{ $raksts->date}}">
        <label for="pin">
        <input type="checkbox" id="rakstu-piespraust" name="pin" value="{{ $raksts->pin }}">
        <label for="pictures">Bildes</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{$raksts->pictures}}">
        <button type="submit">Saglabāt</button>
    </form>
    <button type="button" onclick="{{ route("blog.delete", $raksts->id) }}">Dzēst</button>
</x-blog.middle>