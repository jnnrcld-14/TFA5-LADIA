@extends('layouts.app')
@section('title', 'User Accounts')
@section('content')
<section class="panel"><h1>User Accounts</h1><p>Total users: {{ $users->count() }}</p><a href="{{ route('users.create') }}">+ New User</a>@if(session('success'))<p>{{ session('success') }}</p>@endif<div class="table-wrap"><table><thead><tr><th>ID</th><th>Username</th><th>Full Name</th><th>Email</th><th>Action</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td>{{ $user->id }}</td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td><td>{{ $user->email }}</td><td><a href="{{ route('users.edit', $user) }}">Edit</a></td></tr>
@endforeach
</tbody></table></div></section>
@endsection
