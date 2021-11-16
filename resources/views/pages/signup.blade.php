@extends('layouts.form')

@section('title')
    SpacePort | Login Page
@endsection

@section('form')
    <div id="login">
        <h1>Sign up</h1>
        <form  action="{{ asset('/signup/process') }}" onsubmit="return regCheck()" method="post">
            <input id="username" type="text" name="username" placeholder="USERNAME" class="log-input"><br>
            <input id="email" type="text" name="email" placeholder="EMAIL" class="log-input"><br>
            <input id="password" type="password" name="password" placeholder="PASSWORD" class="log-input"><br>
            <input id="conpass" type="password" name="conpass" placeholder="CONFIRM PASSWORD" class="log-input"><br>

            @csrf

            <p id="error"></p>

            <button type="submit" class="log-buttons">Submit</button>
            <button type="reset" class="log-buttons">Clear</button>
            <div class="cleaner"></div>
        </form>
        <a href="{{ asset('/login') }}">Log in</a>
    </div>
@endsection
