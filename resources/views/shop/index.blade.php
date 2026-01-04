<x-base>
    <div>{{session()->get('message')}}</div>
    @if (Auth::check())
        <div class="full-width">
            <a href={{route('blog.create')}} class="createbutton">{{ucfirst(__('create'))}} {{ucfirst(__('special.ack_new'))}} {{ucfirst(__('special.ack_article'))}}</a>
        </div>
    @endif
    <div id="shop-container">
        <!--<div class="shop">
            <h2>Jumti</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere purus et massa pharetra, quis consequat nisi tempor. Sed ligula diam, commodo nec diam non, sagittis semper eros. Curabitur metus massa, semper viverra viverra nec, semper a elit. Duis non lacus id risus laoreet commodo sit amet a metus. Nulla ornare, justo sed mollis vestibulum, augue urna ultricies nisl, eget efficitur velit magna at elit. Vestibulum scelerisque, arcu vitae faucibus egestas, tortor nunc finibus arcu, at pellentesque sem lorem ac ipsum. Suspendisse potenti. Maecenas scelerisque nec mi id vestibulum. Etiam scelerisque sollicitudin sem, in pretium lacus elementum a. Donec fringilla, lorem id sodales ullamcorper, quam mauris feugiat mi, et dapibus nunc nisl nec libero. Suspendisse potenti.</p>
            @if (Auth::check())
            <a href="">Mainīt</a>
            @endif
        </div>
        <div class="shop">
            <h2>Lubiņas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere purus et massa pharetra, quis consequat nisi tempor. Sed ligula diam, commodo nec diam non, sagittis semper eros. Curabitur metus massa, semper viverra viverra nec, semper a elit. Duis non lacus id risus laoreet commodo sit amet a metus. Nulla ornare, justo sed mollis vestibulum, augue urna ultricies nisl, eget efficitur velit magna at elit. Vestibulum scelerisque, arcu vitae faucibus egestas, tortor nunc finibus arcu, at pellentesque sem lorem ac ipsum. Suspendisse potenti. Maecenas scelerisque nec mi id vestibulum. Etiam scelerisque sollicitudin sem, in pretium lacus elementum a. Donec fringilla, lorem id sodales ullamcorper, quam mauris feugiat mi, et dapibus nunc nisl nec libero. Suspendisse potenti.</p>
            @if (Auth::check())
            <a href="">Mainīt</a>
            @endif
        </div>
        <div class="shop">
            <h2>Malka</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere purus et massa pharetra, quis consequat nisi tempor. Sed ligula diam, commodo nec diam non, sagittis semper eros. Curabitur metus massa, semper viverra viverra nec, semper a elit. Duis non lacus id risus laoreet commodo sit amet a metus. Nulla ornare, justo sed mollis vestibulum, augue urna ultricies nisl, eget efficitur velit magna at elit. Vestibulum scelerisque, arcu vitae faucibus egestas, tortor nunc finibus arcu, at pellentesque sem lorem ac ipsum. Suspendisse potenti. Maecenas scelerisque nec mi id vestibulum. Etiam scelerisque sollicitudin sem, in pretium lacus elementum a. Donec fringilla, lorem id sodales ullamcorper, quam mauris feugiat mi, et dapibus nunc nisl nec libero. Suspendisse potenti.</p>
            @if (Auth::check())
            <a href="">Mainīt</a>
            @endif
        </div>-->
        @foreach ($raksti as $raksts)
            <div class="shop">
                <div class="article-body">
                    <h1>{{$raksts->title}}</h1>
                    <p>
                        {{$raksts->content}}
                    </p>
                    </div>
                <div class="article-footer">
                    <a href ={{ route('shop.show', $raksts->id) }} class="overflow-sec">{{ucfirst(__('actions.view'))}} {{ucfirst(__('special.full'))}} {{ucfirst(__('special.ack_article'))}}</a>
                </div>
            </div>
        @endforeach
    </div>
</x-base>