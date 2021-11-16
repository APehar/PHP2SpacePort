@extends('layouts.front')

@section('title')
    @isset($ship)
        SpacePort | {{ $ship->name }}
    @endisset
@endsection

@section('content')
    @isset($ship)
        @if($ship->deleted == 0)
        <div id="content">
            <div id="details">
                <div id="details-info1">
                    <img src="{{ asset('/images/' . $ship->img) }}" alt="{{ $ship->name }}">
                    <h3 style="text-transform: lowercase">{{ $ship->name }}</h3>
                    <p>{{ $ship->story }}</p>
                </div>
                <div class="cleaner"></div>
                <div id="details-info2">
                    <p>Price: {{ $ship->price }}<spanp id="add"> +20% = {{ $ship->price + ($ship->price * 0.2) }}</spanp></p>
                    <hr>
                    <form action="{{ asset('/rent') }}" method="post">
                        <label class="crew">Crew
                            <input id="boxid" type="checkbox" class="checkbox" name="crew" value="1" onclick="ChangeCheckboxLabel(this)"></p>
                            <span class="checkmark"></span>
                        </label>
                        <hr>

                        @csrf

                        <input type="hidden" value="{{ $ship->id_ship }}" name="ship_id" />

                        <button type="submit" name="submit">RENT!</button>
                    </form>
                </div>
            </div>
        </div>
        @else
            <div id="deleted">This ship has been removed from our website.</div>
        @endif

    @endisset
@endsection
