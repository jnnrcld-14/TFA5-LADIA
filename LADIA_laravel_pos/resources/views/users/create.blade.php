@extends('layouts.app')
@section('title', 'New User')
@section('content')<section class="panel"><h1>New User</h1>@include('partials.errors')<form method="POST" action="{{ route('users.store') }}">@csrf<label>Username<input name="username" required></label><label>Full Name<input name="full_name" required></label><label>Email<input type="email" name="email" required></label><label>Password<input type="password" name="password" minlength="8" required></label><button type="submit">Create User</button></form></section>@endsection
