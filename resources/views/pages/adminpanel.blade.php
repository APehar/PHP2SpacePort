@extends('layouts.admin')

@section('title')
    SpacePort | Admin Panel
@endsection

@section('panel')
    <div class="admin-info">
        <h3>Ships Panel</h3>
        <p>In the Ships section admins can view all existing ships. They can also add new ships and edit and delete existing ships</p>
    </div>
    <div class="admin-info">
        <h3>Users Panel</h3>
        <p>In the Users section admins can view all existing users. They can also grant admin rights and delete users at choice</p>
    </div>
    <div class="admin-info">
        <h3>The Log</h3>
        <p>In the Log section admins can view the log of all activities on the web site, such as signing up, logging in and all admin activities</p>
    </div>
    <div class="admin-info">
        <h3>Message List</h3>
        <p>In the Message List admins can view all messages that come form users</p>
    </div>
@endsection
