@extends('layout')
<form method="POST" action="/users">
    @csrf
    <div class="add_page">
        <div>
            <label> User name </label>
            <input type="text" name="name">
        </div>
        <div>
            <label> User email </label>
            <input type="text" name="email">
        </div>
        <div id="add">
            <label> Add user </label>
            <button type="submit">Add user</button>
        </div>
    </div>
</form>
