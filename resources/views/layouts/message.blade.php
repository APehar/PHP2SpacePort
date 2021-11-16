@include("fixed.header")


<div id="alert">
    <p>

        @if(session()->has('message'))
            @yield('message')
        @endif
    </p>
    <br>
    <a href="{{ asset('/') }}">Home</a>
    <a href="{{ asset('/profile') }}">Profile</a>
</div>


</body>
</html>
