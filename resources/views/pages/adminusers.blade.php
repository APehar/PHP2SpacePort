@extends('layouts.admin');

@section('title')
    SpacePort | Users Panel
@endsection

@section('panel')
    <div id="admin-users">
        <table id="table">
            <tr>
                <th>ID</th>
                <th>Usernamer</th>
                <th colspan="3">Email</th>
            </tr>
            @isset($users)
                @foreach($users as $user)
                    @if($user->id_user == 1 || $user->id_user == session('user')->id_user)
                        @continue
                    @else
                    <tr>
                        <td>{{ $user->id_user }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="padding: unset">
                            @if($user->role_id ==2)
                                <a href="{{ asset('/users/grant/'. $user->id_user) }}">Grant admin rights</a>
                            @endif
                        </td>
                        <td style="padding: unset"><a href="{{ asset('/users/delete/' . $user->id_user) }}">Delete!</a></td>
                    </tr>
                    @endif
                @endforeach
            @endisset

        </table>
    </div>
    <div class="cleaner"></div>
@endsection
