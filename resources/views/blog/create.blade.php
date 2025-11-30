<x-base>
    <div class="page-head">
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
    <form method="POST" action="{{ route('blog.store') }}", enctype="multipart/form-data">
        @csrf
        <label for="title">Nosaukums</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{old('title')}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content" value="{{old('content')}}"></textarea>
        <label for="date">Palaišanas datums</label>
        <input type="date" id="raksta-datums" name="date" value="{{old('date')}}">
        <label for="pin">Piespraust?</label>
        <input type="checkbox" id="rakstu-piespraust" name="pin" value="{{ old('pin') }}">
        <label for="pictures">Bildes</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{old('pictures')}}">
        <button type="submit">Saglabāt</button>
    </form>
</x-base>