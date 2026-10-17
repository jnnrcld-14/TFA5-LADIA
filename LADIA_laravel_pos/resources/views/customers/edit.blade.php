@extends('layouts.app')
@section('title', 'Edit Customer')
@section('content')<section class="panel"><h1>Edit Customer</h1>@include('partials.errors')<form method="POST" action="{{ route('customers.update', $customer) }}">@csrf @method('PUT')@include('customers.form')<button type="submit">Update Customer</button></form></section>@endsection
