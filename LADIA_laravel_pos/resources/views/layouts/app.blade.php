<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'POS Application')</title>
<style>
body{margin:0;font-family:Arial,sans-serif;background:#f3f6fa;color:#1e293b}header{background:#172554;padding:20px 7%;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:15px}header strong{color:white;font-size:20px}nav{display:flex;flex-wrap:wrap;gap:18px}nav a{color:white;text-decoration:none}nav a:hover{color:#93c5fd}main{max-width:1000px;margin:40px auto;padding:0 20px}.panel{background:white;padding:28px;border-radius:12px;box-shadow:0 4px 16px #0000000a}.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin-top:24px}.card{background:white;border-radius:12px;padding:22px;text-decoration:none;color:#1e293b;border:1px solid #e2e8f0}.card:hover{border-color:#3b82f6}table{width:100%;border-collapse:collapse;background:white;margin-top:20px}th,td{text-align:left;padding:14px;border-bottom:1px solid #e2e8f0}th{background:#eaf0f8}.table-wrap{overflow-x:auto}footer{text-align:center;padding:24px;color:#64748b}
</style></head><body>
<header><strong>POS APPLICATION</strong><nav><a href="{{ route('home') }}">Home</a><a href="{{ route('tasks.index') }}">Tasks</a><a href="{{ route('about') }}">About</a><a href="{{ route('customers.index') }}">Customers</a><a href="{{ route('users.index') }}">Users</a>@auth <a href="{{ route('profile') }}">Profile</a><form method="POST" action="{{ route('logout') }}" style="display:inline">@csrf<button style="background:none;border:0;color:white;cursor:pointer">Logout</button></form> @else <a href="{{ route('login') }}">Login</a> @endauth</nav></header>
<main>@yield('content')</main><footer>Laravel POS Application — TFA1</footer></body></html>
