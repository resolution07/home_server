@extends('layouts.app')
@section('title')
    Роль - {{$role->title}}
@endsection

@section('content')
    <div class="container">
        <div class="id">{{$role->id}}</div>
        <div class="title">{{$role->title}}</div>
        <div class="code">{{$role->code}}</div>
    </div>
@endsection
