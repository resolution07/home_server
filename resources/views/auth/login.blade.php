@extends('layouts.template.app')

@section('title', 'Авторизация')

@section('main')
    <form action="{{ route('auth.login.save') }}" method="POST">
        @csrf
        <input type="email" name="user[email]" id="">
        <input type="password" name="user[password]" id="">
        <input type="submit" value="Register">
    </form>
@endsection

@include('layouts.template.footer')