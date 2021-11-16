@extends('layouts.message')

@section('title')
    SpacePort | Message
@endsection

@section('message')
    {{ session('message') }}
@endsection
