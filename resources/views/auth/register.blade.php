@extends('layouts.template.app')

@section('title', 'Регистрация')
@section('header')
    @include('layouts.template.header')
@endsection
@section('main')
    <section id="contact" class="four">
        <div class="container">
            <header>
                <h2>Регистрация</h2>
            </header>

            <form action="{{ route('auth.register.save') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 col-12-mobile"><input type="email" name="user[email]" placeholder="Email" /></div>
                    <div class="col-6 col-12-mobile"><input type="password" name="user[password]" placeholder="Password" /></div>
                    <div class="col-6 col-12-mobile"><input type="password" name="user[confirm_password]" placeholder="Confirm password"/></div><br>

                    <div class="col-12">
                        <input type="submit" value="Register" />
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection
