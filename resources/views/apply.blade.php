@extends('layouts.app')
<form action="/apply" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit">
</form>