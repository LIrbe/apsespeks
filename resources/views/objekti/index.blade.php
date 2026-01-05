<x-base>
    <div class="page-head">
        <h1>{{ucfirst(trans_choice('special.object', 2))}}</h1>
    </div>
    @auth
        <div class="full-width new button">
            <a href={{route('objekti.create')}} class="createbutton">{{ucfirst(__('Create'))}} {{ucfirst(__('special.ack_new'))}} {{ucfirst(__('special.ack_object'))}}</a>
        </div>
    @endauth
    <div>
        <div id="objects-container">
            <div id="objects-list">
                <table>
                    <thead>
                        <th>{{ucfirst(__('validation.attributes.name'))}}</th>
                        <th>{{ucfirst(__('validation.attributes.time'))}}</th>
                        <th>{{ucfirst(__('Location'))}}</th>
                        <th>{{ucfirst(__('information'))}}</th>
                    </thead>
                    <tbody>
                        @foreach ($objekti as $objekts)
                            <tr>
                                <td>{{$objekts->title}}</td>
                                <td>{{$objekts->finish_date}}</td>
                                <td><a href="#">Vieta</a></td>
                                <td><a href="{{route('objekti.show', $objekts->id)}}">Informācija</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="map">
                <!--<gmp-map></gmp-map>-->
                <div style="color:black;background-color:gray;height:65vh;display:flex;align-items:center;justify-content:center;aspect-ratio:1/1">{{ucfirst(__('special.map'))}}</div>
            </div>
        </div>
        @if ($act_objekts != NULL)
            <div>
                <h1>{{$act_objekts->title}}</h1>
                <p>{{$act_objekts->description}}</p>
                <p>{{$act_objekts->finish_date}}</p>
                <a href={{route('objekti.show', $act_objekts->id)}}>{{ucfirst(__('special.link'))}} {{__('special.to_the_object')}}</a>
            </div>
        @endif
</x-base>