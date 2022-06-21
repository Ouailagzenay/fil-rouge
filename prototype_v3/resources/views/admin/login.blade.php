@extends('layouts.adminApp')

@section('content')
    <form method="post" action="{{route('admin.login')}}">
        <label for="">UserName</label>
        <input type="text" name="username" id="">
        <label for="">password</label>
        <input type="password" name="password">
        <button type="submit">submit</button>
    </form>
@endsection