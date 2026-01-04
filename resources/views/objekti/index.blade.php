<x-base>
    <div class="page-head">
        <h1>{{ucfirst(trans_choice('special.object', 2))}}</h1>
    </div>
    <div>
        <div id="objects-container">
            <div id="objects-list">
                <table>
                    <thead>
                        <th>{{ucfirst(__('validation.attributes.name'))}}</th>
                        <th>{{ucfirst(__('validation.attributes.time'))}}</th>
                        <th>{{ucfirst(__('Location'))}}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$objekts->nosaukums</td>
                            <td>$objekts->finish_date</td>
                            <td><a href="#">Vieta</a></td>
                        </tr>
                        <tr>
                            <td>$objekts2->nosaukums</td>
                            <td>$objekts2->finish_date</td>
                            <td><a href="#">Vieta2</a></td>
                        </tr>
                        <tr>
                            <td>$objekts3->nosaukums</td>
                            <td>$objekts3->finish_date</td>
                            <td><a href="#">Vieta3</a></td>
                        </tr>
                        <tr>
                            <td>$objekts4->nosaukums</td>
                            <td>$objekts4->finish_date</td>
                            <td><a href="#">Vieta4</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="map">
                <!--<gmp-map></gmp-map>-->
                <div style="color:black;background-color:gray;height:65vh;display:flex;align-items:center;justify-content:center;aspect-ratio:1/1">{{ucfirst(__('special.map'))}}</div>
            </div>
        </div>
        @if ($objekts != NULL)
            <div>
                <h1>{{$objekts->title}}</h1>
                <p>{{$objekts->description}}</p>
                <p>{{$objekts->finish_date}}</p>
                <a href={{route('objekti.show', $objekts->id)}}>{{ucfirst(__('special.link'))}} {{__('special.to_the_object')}}</a>
            </div>
        @endif
    </div>
</x-base>