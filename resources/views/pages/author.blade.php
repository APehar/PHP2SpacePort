@extends('layouts.front')

@section('title')
    SpacePort | Author
@endsection

@section('content')

    <div id="author">
        <div id="sendmsg">
            <h2 id="titlemsg">Construct a message to send to the admins</h2>
            <form action="{{ asset('/sendmsg') }}" method="get">
                <textarea name="msg" id="msgtext" cols="60" rows="12"></textarea>
                <button id="sendbtn" type="submit">Send!</button>
            </form>
        </div>
        <h2 id="about">About the Author</h2>
        <table>
            <tr>
                <td><b>Full Name:</b></td>
                <td>Aleksandar Pehar</td>
            </tr>
            <tr>
                <td><b>Student Number:</b></td>
                <td>44/16</td>
            </tr>
            <tr>
                <td><b>E-mail:</b></td>
                <td>acapehar@gmail.com</td>
            </tr>
            <tr>
                <td><b>Date of Birth:</b></td>
                <td>12.04.1997.</td>
            </tr>
            <tr>
                <td><b>Place of Birth:</b></td>
                <td>Belgrade, Serbia</td>
            </tr>
            <tr>
                <td><b>Spoken Languages:</b></td>
                <td>Seriban, English</td>
            </tr>
            <tr>
                <td><b>Schools:</b></td>
                <td>Cetvrta Gimnazija u Beogradu, Visoka ICT</td>
            </tr>
            <tr>
                <td><b>Studying:</b></td>
                <td> Internet Technology(IT)</td>
            </tr>
            <tr>
                <td><b>Year of Study:</b></td>
                <td>Third</td>
            </tr>
            <tr>
                <td><b>Aspirations:</b></td>
                <td>Creating and working on websites by myself or with a team</td>
            </tr>
            <tr>
                <td><b>Worked At:</b></td>
                <td>BitProject</td>
            </tr>
            <tr>
                <td><b>Known Programing Languages:</b></td>
                <td>HTML, CSS, JavaScript, JQuery, SQL, PHP, C, Java</td>
            </tr>
        </table>
        <img id="img-me"src="{{asset('images/me.jpg')}}" alt="author-img">
    </div>
@endsection
