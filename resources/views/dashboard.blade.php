@extends('layout')
@section('content')
    @if (Session::get('addTodo'))
        <div class="alert alert-success">
            {{ Session::get('addTodo') }}
        </div>
    @endif 
<br>
<div class="dashboard">
    <h1>Selamat Datang di Halaman Dashboard</h1>
    <br>
    <h1>Username : {{ auth()->user()->username }}</h1>
    <h1>Email : {{ auth()->user()->email }}</h1>  
</div>


@if(session('isGuest'))
<h2>
    <b>
        <i>
            {{ session('isGuest') }}
        </i>
    </b>
</h2>
@endif
@endsection