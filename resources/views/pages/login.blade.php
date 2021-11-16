@extends('layouts.form')

@section('title')
    SpacePort | Login Page
@endsection

@section('form')
    <div id="login">
        <h1>Log in</h1>
        <form method="post" action="{{ asset('/login/process') }}">
            <input type="text" name="email" placeholder="EMAIL" class="log-input"><br>
            <input type="password" name="password" placeholder="PASSWORD" class="log-input"><br>

            @csrf

            <button type="submit" class="log-buttons" name="submit">Submit</button>
            <button type="reset" class="log-buttons">Clear</button>
            <div class="cleaner"></div>
        </form>

        @if(session()->has('message'))
            <p style="color: red">{{ session('message') }}</p>
        @endif

        <a href="{{ asset('/signup') }}">Sign up</a>
    </div>
@endsection
