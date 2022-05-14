@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="auth-form">
        <h2>Login</h2>
        <form action="" method="post">
            @csrf
            <div class="field">
                <label for="">E-mail</label>
                <input type="email" name="email">
            </div>
            <div class="field">
                <label for="">Password</label>
                <input type="password" name="email">
            </div>
            <br>
            <div class="field">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
@endsection
