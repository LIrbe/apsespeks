<x-base>
    <div class="page-head">
        <h1>{{ucfirst(__('special.modify'))}} {{ucfirst(trans_choice('special.ack_object', 1))}}</h1>
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
    <div id="edit-object-container" style="display:flex">
        <form method="PUT" action="{{ route('objekti.update', $objekts->id) }}" class="form">
            @csrf
            <label for="title">{{ucfirst(__('validation.attributes.name'))}}</label>
            <input type="text" id="objekta-nosaukums" name="title" value="{{$objekts->title}}">
            <textarea name="description" rows="10" cols="50" id="objekta-content">{{$objekts->description}}</textarea>
            <label for="finish_date">{{ucfirst(__('special.ack_finish'))}} {{ucfirst(__('validation.attributes.date'))}}</label>
            <input type="date" id="objekta-datums" name="finish_date" value="{{$objekts->finish_date}}" class="form-width">
            <label for="pictures">{{ucfirst(trans_choice('Image', 2))}}</label>
            <input type="file" name="pictures" id="objekta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{$objekts->pictures}}">
            <label for="coordinates">{{ucfirst(__('special.coords'))}}</label>
            <input type="text" id="objekta-koordinatas" name="coordinates" value="{{$objekts->coordinates}}">
            <button type="submit" class="form-width">{{ucfirst(__('Save'))}}</button>
        </form>
        <div id="map">
            <!--<gmp-map></gmp-map>-->
            <div style="color:black;background-color:gray;height:50vh;display:flex;align-items:center;justify-content:center;aspect-ratio:1/1">{{ucfirst(__('special.map'))}}</div>
        </div>
    </div>
    <div class="full-width delete button">
        <a href="{{ route("objekti.delete", $objekts) }}" class="createbutton">{{ucfirst(__('Delete'))}}</a>
    </div>
</x-base>