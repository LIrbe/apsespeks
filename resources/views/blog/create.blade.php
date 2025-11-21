<x-blog.middle>
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
    {{html()->form('/post')->open()}}
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