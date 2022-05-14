@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <div class="auth-form">
        <h2>Registration</h2>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <form action="" method="post">
            @csrf
            <div class="field">
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div class="field">
                <label for="">E-mail</label>
                <input type="email" name="email">
            </div>
            <div class="field">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <div class="field">
                <label for="">Confirm password</label>
                <input type="password" name="password_confirmation">
            </div>
            <br>
            <div class="field">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
@endsection
