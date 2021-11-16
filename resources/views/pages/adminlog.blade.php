@extends('layouts.admin');

@section('title')
    SpacePort | Users Panel
@endsection

@section('panel')
    <div id="admin-logs">
        <table id="table">
            <tr>
                <th>User</th>
                <th>Action</th>
                <th>Time & Date
                    <a href="{{ asset('/admin/log/desc') }}" class="log-order">DESC</a>
                    <a href="{{ asset('/admin/log/asc') }}" class="log-order">ASC</a>
                </th>
            </tr>
        @isset($logs)
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->username }}</td>
                <td>{{ $log->name }}</td>
                <td>{{ date("h:i d.m.Y.",$log->time) }}</td>
            </tr>
            @endforeach
        @endisset
        </table>
    </div>
    <div class="cleaner"></div>
@endsection
