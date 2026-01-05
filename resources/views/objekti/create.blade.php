<x-base>
    <div class="page-head">
        <h1>{{ucfirst(__('New'))}} {{ucfirst(trans_choice('special.object', 1))}}</h1>
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
    <form method="POST" action="{{ route('objekti.store') }}", enctype="multipart/form-data" class="form">
        @csrf
        <label for="title">{{ucfirst(__('validation.attributes.name'))}}</label>
        <input type="text" id="objekta-nosaukums" name="title" value="{{old('title')}}">
        <textarea name="description" rows="10" cols="50" id="objekta-content" value="{{old('content')}}"></textarea>
        <label for="finish_date">{{ucfirst(__('special.ack_finish'))}} {{ucfirst(__('validation.attributes.date'))}}</label>
        <input type="date" id="objekta-datums" name="finish_date" value="{{old('date')}}" class="form-width">
        <label for="pictures">{{ucfirst(trans_choice('Image', 2))}}</label>
        <input type="file" name="pictures" id="objekta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{old('pictures')}}">
        <label for="coordinates">{{ucfirst(__('special.coords'))}}</label>
        <input type="text" id="objekta-koordinatas" name="coordinates" value="{{old('coordinates')}}">
        <button type="submit" class="form-width">{{ucfirst(__('Save'))}}</button>
    </form>
</x-base>