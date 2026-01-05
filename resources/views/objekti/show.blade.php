<x-base>
    <div id="show-objects-container">
        @if (Session::has('error'))
            <div class="errors">
                {{Session::get('error')}}
            </div>
        @endif 
            <div>
        <div class="object-body">
        <h1>{{$objekts->title}}</h1>
        <p>
            {{$objekts->description}}
        </p>
        <div>{{ucfirst(__('special.ack_finish'))}} {{ucfirst(__('validation.attributes.date'))}}: {{ $objekts->date }}</div>
        </div>
        @if ($objekts->image != NULL)
            @foreach ($objekts->image as $picture)
                <img src="{{ $picture }}">
            @endforeach
        @endif
        @auth
        <div>
            Veidotājs: {{$objekts->user->email}}
        </div>
        @endauth
        <br>
        <div>
            @if ($objekts->created_at > $objekts->updated_at)
                Atjaunināts: {{$objekts->created_at}}
            @else
                Atjaunināts: {{$objekts->updated_at}}
            @endif
        </div>
            <div class="new button">
                <a href={{route('objekti.edit', $objekts->id)}} class="createbutton">{{ucfirst(__('Edit'))}}</a>
            </div>
        </div>
        <div id="map">
            <!--<gmp-map></gmp-map>-->
            <div style="color:black;background-color:gray;height:50vh;display:flex;align-items:center;justify-content:center;aspect-ratio:1/1">{{ucfirst(__('special.map'))}}</div>
        </div>
    </div>
</x-base>