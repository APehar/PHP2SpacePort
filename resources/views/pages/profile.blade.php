@extends('layouts.front')

@section('title')
    SpacePort | Prifile Page
@endsection

@section('content')

    <!--    -->
    <div id="profile-header">
        <h2 id="user">{{ session('user')->username }}</h2>
        <a href="{{ asset('/logout') }}"  id="logout">Log Out</a>
    </div>
    <div id="profile-info">
        @if(session('user')->role_id == 1)
            <span>Here you can see all your previous purchases and compere them as you see fit. Go to <a href="{{ asset('/admin') }}">ADMIN PANEL</a></span>
        @else
            <span>Here you can see all your previous purchases and compere them as you see fit.</span>
        @endif
    </div>
    <div id="rented">
        @isset($rents)

            @foreach($rents as $rent)
                <div class="rent">
                    <a href="{{ asset('/ships/' . $rent->ship_id) }}"><img src="{{ asset('/images/' . $rent->img) }}" alt="{{ $rent->name }}"></a>
                    <h3>{{ $rent->name }}</h3>
                    <span class="rent-info">Date: {{ date("d.m.Y.",$rent->time) }}</span>
                    <span class="rent-info">Crew:
                        @if($rent->crew == 1)
                            Rented</span>
                            <span class="rent-info">Price: {{ $rent->price + ($rent->price * 0.2) }}</span>
                        @else
                            Not Rented</span>
                            <span class="rent-info">Price: {{ $rent->price }}</span>
                        @endif
                </div>

            @endforeach
                <div class=\"cleaner\"></div>

        @endisset
    </div>

    @if($rents->isEmpty())
        <div id='no_rents'>You dont have any past rented ships, come back when you do!</div>
    @endif
@endsection
