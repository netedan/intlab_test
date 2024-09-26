@extends ('layout')

<table>
    <tr>
        <th>User ID</th>
        <th>User name</th>
        <th>User e-mail</th>
    </tr>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
    </tr>
</table>
