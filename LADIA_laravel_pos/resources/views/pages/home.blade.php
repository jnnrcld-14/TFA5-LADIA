@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="panel"><h1>Welcome to the POS Application</h1><p>A simple Point of Sale management application built with Laravel and Blade.</p><p>Explore the pages below to view customer, user, and task records.</p>@if($todayTasks->isNotEmpty())<h2>Today's Tasks</h2><ul>@foreach($todayTasks as $task)<li>{{ $task->title }} — {{ ucfirst($task->status) }}</li>@endforeach</ul>@endif</section>
<section class="cards"><a class="card" href="{{ route('about') }}"><h2>About</h2><p>Learn about this application.</p></a><a class="card" href="{{ route('customers.index') }}"><h2>Customer Accounts</h2><p>View sample customer records.</p></a><a class="card" href="{{ route('users.index') }}"><h2>User Accounts</h2><p>View sample system users.</p></a></section>
@endsection
