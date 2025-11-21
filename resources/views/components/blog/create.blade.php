<div>
    <h1>Jauns raksts</h1>
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{Form::open(array('url' => '', 'files' => true, 'route' => ''));}}
    {{Form::label('title', 'Nosaukums');}}
    {{Form::text('title');}}
    {{Form::text('content');}}
    {{Form::label('date', 'Palaišanas datums');}}
    {{Form::datetime('date');}}
    {{Form::label('pictures');}}
    {{Form::file('pictures');}}
    {{Form::submit('Saglabāt');}}
    {{Form::submit('Atcelt');}}
    {{Form::csrf_token();}}
    {{Form::close();}}
    <form method="POST">
        <label for="title">Nosaukums</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{old('title')}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content" value="{{old('content')}}">
        <label for="date">Palaišanas datums</label>
        <input type="datetime" id="raksta-datums" name="date" value="{{old('date')}}">
        <label for="pictures">Bildes</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{old('pictures')}}">
       <button type="button" onclick="">Saglabāt</button>
        <button type="button" onclick="">Atcelt</button>
    </form>
</div>