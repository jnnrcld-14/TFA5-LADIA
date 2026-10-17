@extends('layouts.app')
@section('title', 'New Customer')
@section('content')<section class="panel"><h1>New Customer</h1>@include('partials.errors')<form method="POST" action="{{ route('customers.store') }}">@csrf@include('customers.form')<button type="submit">Create Customer</button></form></section>@endsection
