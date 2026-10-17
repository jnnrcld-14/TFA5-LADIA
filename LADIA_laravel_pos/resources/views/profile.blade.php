@extends('layouts.app')
@section('title', 'Profile')
@section('content')<section class="panel"><h1>Profile</h1>@auth<p><strong>Username:</strong> {{ auth()->user()->username }}</p><p><strong>Full name:</strong> {{ auth()->user()->full_name }}</p><p><strong>Email:</strong> {{ auth()->user()->email }}</p>@else<p>Please log in to view a profile.</p>@endauth</section>@endsection
