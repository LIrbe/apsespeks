<x-base>
    <div id="user-container">
        <table id="user-table">
            <thead>
                <th colspan="2">{{ucfirst(trans_choice('User', 2))}}</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->email }}</td><td><a href="{{route('auth.destroy', $user->id)}}">{{ucfirst(__('Delete'))}}</a></td>
                </tr>
                @endforeach
            </tbody>
            <div class="new button">
                <a href="{{route('register.page')}}">{{ucfirst(__('special.to_register'))}} {{ucfirst(__('special.ack_new'))}} {{ucfirst(__('special.ack_admin'))}}</a>
            </div>
        </table>
    </div>
</x-base>
