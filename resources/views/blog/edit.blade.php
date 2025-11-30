<x-base>
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
    <form method="PUT" action="{{ route('blog.update') }}">
        @csrf
        <label for="title">Nosaukums</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{$raksts->title}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content">{{$raksts->content}}</textarea>
        <label for="date">Palaišanas datums</label>
        <input type="datetime" id="raksta-datums" name="date" value="{{ $raksts->date}}">
        <label for="pin">
        <input type="checkbox" id="rakstu-piespraust" name="pin" value="{{ $raksts->pin }}">
        <label for="pictures">Bildes</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{$raksts->pictures}}">
        <button type="submit">Saglabāt</button>
    </form>
    <a href="{{ route("blog.delete", $raksts) }}" class="createbutton">Dzēst</a>
</x-base>