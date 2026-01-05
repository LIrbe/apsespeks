<x-base>
    <div class="page-head">
        <h1>{{ucfirst(__('special.modify'))}} {{ucfirst(trans_choice('special.article', 1))}}</h1>
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
    <form method="PUT" action="{{ route('blog.update', $raksts->id) }}" class="form">
        @csrf
        <label for="title">{{ucfirst(__('validation.attributes.name'))}}</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{$raksts->title}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content">{{$raksts->content}}</textarea>
        <label for="date">{{ucfirst(__('special.release'))}} {{ucfirst(__('validation.attributes.date'))}}</label>
        <input type="datetime" id="raksta-datums" name="date" value="{{ $raksts->date}}">
        <div class="pin">
            <label for="pin">{{ucfirst(__('special.pin'))}}?</label>
            <input type="checkbox" id="rakstu-piespraust" name="pin" value="{{ $raksts->pin }}">
        </div>
        <label for="pictures">{{ucfirst(trans_choice('Image', 2))}}</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{$raksts->pictures}}">
        <button type="submit" class="form-width">{{ucfirst(__('Save'))}}</button>
    </form>
    <div class="full-width delete button">
        <a href="{{ route("blog.delete", $raksts) }}" class="createbutton">{{ucfirst(__('Delete'))}}</a>
    </div>
</x-base>