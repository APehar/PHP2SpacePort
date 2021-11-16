@extends('layouts.front')

@section('title')
    SpacePort | All Ships
@endsection

@section('content')
    <div id="content">
        <div id="order">
            <h3>Sort By:</h3>
            <form action="{{ asset('/sort') }}" method="get">


                <input type="text" id="search-bar" name="search"  placeholder="Search!">


                @isset($categories)
                    @foreach($categories as $cat)
                        <label class="cat">{{ $cat->ime }}
                            <input type="radio" class="checkbox" name="origin[]" value="{{ $cat->id_cat }}">
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                @endisset

            <button id="sort" type="submit">Go!</button>
            <a href="{{ asset('/ships') }}" id="all" >All</a>
            </form>

        </div>

        <div id="ships">
            @isset($ships)
                @foreach($ships as $ship)
                    <div class="ship">
                        <a href="{{ asset('/ships/' . $ship->id_ship) }}"><img src="{{ asset('/images/' . $ship->img) }}" alt="{{ $ship->name }}"></a>
                        <h3>
                            <a href="{{ asset('/ships/' . $ship->id_ship) }}" class="ship-title">{{ $ship->name }}</a>
                        </h3>
                        <span class="ship-price">Price: {{ $ship->price }}</span>
                        <a href="{{ asset('/ships/' . $ship->id_ship) }}" class="rent-link"><span class="ship-rent">RENT!</span></a>
                    </div>
                @endforeach
            @endisset
        </div>
        <div class="cleaner"></div>
        <div id="pages">
            @isset($ships)
                {{ $ships->links() }}
            @endisset
        </div>
    </div>
@endsection
