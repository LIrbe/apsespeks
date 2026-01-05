<x-base>
    <div class="page-head">
        <h1>{{ucfirst(__('New'))}} {{ucfirst(trans_choice('special.article', 1))}}</h1>
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
    <form method="POST" action="{{ route('blog.store') }}", enctype="multipart/form-data" class="form">
        @csrf
        <label for="title">{{ucfirst(__('validation.attributes.name'))}}</label>
        <input type="text" id="raksta-nosaukums" name="title" value="{{old('title')}}">
        <textarea name="content" rows="10" cols="50" id="raksta-content" value="{{old('content')}}"></textarea>
        <label for="date">{{ucfirst(__('special.release'))}} {{ucfirst(__('validation.attributes.date'))}}</label>
        <input type="date" id="raksta-datums" name="date" value="{{old('date')}}" class="form-width">
        <div class="pin">
            <label for="pin">{{ucfirst(__('special.pin'))}}?</label>
            <input type="checkbox" id="rakstu-piespraust" name="pin" value="pin">
        </div>
        <label for="pictures">{{ucfirst(trans_choice('Image', 2))}}</label>
        <input type="file" name="pictures" id="raksta-bildes" accept=".jpg, .png, .jpeg, .tiff" multiple value="{{old('pictures')}}">
        <label for="type">{{ucfirst(__('special.section'))}}</label>
        <select id="type" name="type" class="form-width">
            <option value="blog">{{ucfirst(__('special.blog'))}}</option>
            <option value="shop">{{ucfirst(__('special.shop'))}}</option>
        </select>
        <button type="submit" class="form-width">{{ucfirst(__('Save'))}}</button>
    </form>
</x-base>