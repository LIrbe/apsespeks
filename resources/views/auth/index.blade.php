<x-base>
    <div>
        <table>
            <thead>
                <th>Lietotāji</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach
<!--Jāpievieno kā dzēst lietotājus, nodrošināt, ka galvenais admin konts nav dzēšams-->
            </tbody>
        </table>
    </div>
</x-base>
