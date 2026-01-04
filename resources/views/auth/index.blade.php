<x-base>
    <div>
        <table>
            <thead>
                <th>{{ucfirst(trans_choice('User', 2))}}</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->email }}</td><td><a href="{{route('auth.destroy', $user->id)}}">Dzēst</a></td>
                </tr>
                @endforeach
            </tbody>
            <a href="{{route('register.page')}}">{{ucwords(__('special.register_new_admin'))}}</a>
        </table>
    </div>
</x-base>
