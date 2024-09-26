@extends('layout')

<div class="add">
    <ul>
        <li>
            <a href="{{ route('user_create') }}">Add user</a>
            <a href="{{ route('auth') }}">Login page</a>
            <a href="{{ route('logout') }}">Logout</a>
        </li>
    </ul>
</div>
<table>
    <tr>
        <th>User ID</th>
        <th>User name</th>
        <th>User e-mail</th>
        <th>Manage</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td><a href="/users/{{$user['id']}}">{{$user->id}}</a></td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>
                <form method="POST" action="{{route('user_destroy', $user->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete user</button>
                </form>
                <div class="add">
                    <a href="{{ route('user_edit', $user->id) }}">Edit</a>
                </div>
            </td>
        </tr>
    @endforeach
</table>
