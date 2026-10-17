@extends('layouts.app')
@section('title', 'Login')
@section('content')<section class="panel"><h1>POS Login</h1>@if(session('success'))<p>{{ session('success') }}</p>@endif @if($errors->any())<ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>@endif<form method="POST" action="{{ route('login.submit') }}">@csrf<label>Username<input name="username" value="{{ old('username') }}" required></label><label>Password<input type="password" name="password" required></label><button type="submit">Log In</button></form></section>@endsection
