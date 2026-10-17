@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('content')
<section class="panel"><h1>Customer Accounts</h1><p>Total customers: {{ $customers->count() }}</p><a href="{{ route('customers.create') }}">+ New Customer</a>@if(session('success'))<p>{{ session('success') }}</p>@endif<div class="table-wrap"><table><thead><tr><th>ID</th><th>Full Name</th><th>Email Address</th><th>Action</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td>{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td><a href="{{ route('customers.edit', $customer) }}">Edit</a></td></tr>
@endforeach
</tbody></table></div></section>
@endsection
