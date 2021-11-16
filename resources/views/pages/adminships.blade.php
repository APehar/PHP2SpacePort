@extends('layouts.admin');

@section('title')
    SpacePort | Ships Panel
@endsection

@section('panel')
    <div id="admin-ships">

        <div class="admin-ship">
            <a id="newship" href="{{ asset('/ships/insertform') }}">Add a New Ship</a>
        </div>

        @isset($ships)
            @foreach($ships as $ship)
                @if($ship->deleted == 1)
                    <div class="admin-ship">
                        <a href="{{ asset('/ships/' . $ship->id_ship) }}"><img src="{{ asset('/images/' . $ship->img) }}" alt="{{ $ship->name }}" style="border: 1px solid red;"></a>
                        <h3 style="border: 1px solid red;">
                            <a href="{{ asset('/ships/' . $ship->id_ship) }}" >{{ $ship->name }}</a>
                        </h3>
                        <a href="{{ asset('/ships/edit/' . $ship->id_ship) }}" class="admin-link">Edit</a>
                        <a href="{{ asset('/ships/add/' . $ship->id_ship) }}" class="admin-link">Add</a>
                    </div>
                @else
                <div class="admin-ship">
                    <a href="{{ asset('/ships/' . $ship->id_ship) }}"><img src="{{ asset('/images/' . $ship->img) }}" alt="{{ $ship->name }}"></a>
                    <h3>
                        <a href="{{ asset('/ships/' . $ship->id_ship) }}">{{ $ship->name }}</a>
                    </h3>
                    <a href="{{ asset('/ships/editform/' . $ship->id_ship) }}" class="admin-link">Edit</a>
                    <a href="{{ asset('/ships/delete/' . $ship->id_ship) }}" class="admin-link">Delete</a>
                 </div>
                @endif
            @endforeach
        @endisset
    </div>
    <div id="admin-pages">
        {{ $ships->render() }}
    </div>
@endsection
