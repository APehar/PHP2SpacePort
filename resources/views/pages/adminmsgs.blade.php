@extends('layouts.admin')

@section('title')
    SpacePort | Message List
@endsection

@section('panel')
    @foreach($msgs as $msg)
        <div class="message-box">
            <span class="msg-info">{{ $msg->username }} |  {{ date("d.m.Y.",$msg->time) }}</span>
            <p class="msg-text">{{ $msg->text }}</p>
        </div>
    @endforeach
@endsection
