@extends('layout')
    <form method="POST" action="{{ route('user_update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label> User name </label>
            <input type="text" name="name" value="{{$user['name']}}">
        </div>
        <div>
            <label> User email </label>
            <input type="text" name="email" value="{{$user['email']}}">
        </div>
        <div>
            <input type="submit" name="Edit user">
        </div>
    </form>
