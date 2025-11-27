<x-base>
    <div class="page-head">
        <h1>Objekti</h1>
    </div>
    <div>
        <div id="objects-container">
            <div>
                <menu>
                    <li>Objekts 1</li>
                    <li>Objekts 2</li>
                    <li>Objekts 3</li>
                </menu>
            </div>
            <div>
                <!--<gmp-map></gmp-map>-->
                <div style="color:gray;background-color:gray;width:500px;height:500px">placeholder</div>
            </div>
        </div>
        @if ($objekts != NULL)
            <div>
                <h1>{{$objekts->title}}</h1>
                <p>{{$objekts->description}}</p>
                <p>{{$objekts->finish_date}}</p>
                <a href={{route('objekti.show', $objekts->id)}}>Saite uz objektu</a>
            </div>
        @endif
    </div>
</x-base>