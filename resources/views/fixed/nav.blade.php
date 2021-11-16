<div>
    <a href="{{ asset('/') }}" id="logo"><h1>Space-Port</h1></a>
</div>
<div id="meni">
    <div id="meni-wrapper">
        <ul>
            <il><a href="{{ asset('/ships') }}">Ships</a></il>

            @if(session()->has('user'))
                <il><a href="{{ asset('/profile') }}" style="color: red;">Profile</a></il>
            @else
                <il><a href="{{ asset('/login') }}">Log in</a></il>
            @endif

            <il><a href="{{ asset('/author') }}">Contact</a></il>
        </ul>
    </div>
</div>
<div id="wrapper">
