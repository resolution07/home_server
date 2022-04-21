@extends('layouts.app')
@section('title', 'Пользователи')

@section('content')
    <h2>Пользователи</h2>
    <table>
        <thead>
        <div class="form">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    * {{$error}} * <br>
                @endforeach
            @endif

            <form action="{{route('users.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Имя</label>
                <br>
                <input type="text" name="user[name]" id="name" value="">
                <br>

                <label for="title">E-mail</label>
                <br>
                <input type="email" name="user[email]" id="email" value="">
                <br>

                <label for="code">Пароль</label>
                <br>
                <input type="password" name="user[password]" id="password" value="">
                <br>

                <label for="roles">Роли</label>
                <select name="roles[]" id="roles" multiple>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">
                            {{$role->title}}
                        </option>
                    @endforeach
                </select>
                <br>

                <input type="submit" value="Добавить">
            </form>
        </div>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Roles</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users->items() as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><a href="{{route('roles.read', ['id' => $user->id])}}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>
                    <ul>
                        @if($user->roles())
                            @foreach($user->roles as $user_role)
                                <li>[{{$user_role->id}}] - {{$user_role->title}}</li>
                            @endforeach
                        @endif
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="navigation">
        {{$users->links()}}
    </div>
@endsection
