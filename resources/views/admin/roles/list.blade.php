@extends('layouts.app')
@section('title')
    Роли
@endsection

@section('content')
    <h2>Роли</h2>
    <table>
        <thead>
        <div class="form">
            <form action="{{route('roles.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Название</label>
                <br>
                <input type="text" name="title" id="title">
                <br>

                <label for="code">Символьный код</label>
                <br>
                <input type="text" name="code" id="code">
                <br>
                <input type="submit" value="Добавить">
            </form>
        </div>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Code</td>
        </tr>
        </thead>
        <tbody>
        @foreach($roles->items() as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td><a href="{{route('roles.read', ['id' => $role->id])}}">{{ $role->title }}</a></td>
                <td>{{ $role->code }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="navigation">
        {{$roles->links()}}
    </div>
@endsection
