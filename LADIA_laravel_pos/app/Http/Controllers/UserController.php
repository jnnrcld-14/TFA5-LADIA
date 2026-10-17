<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('full_name')->get();
        return view('users.index', compact('users'));
    }

    public function create() { return view('users.create'); }

    public function store(Request $request) {
        $data = $request->validate(['username' => 'required|string|max:50|unique:users', 'full_name' => 'required|string|max:100', 'email' => 'required|email|max:100', 'password' => 'required|min:8']);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user) { return view('users.edit', compact('user')); }

    public function update(Request $request, User $user) {
        $data = $request->validate(['username' => 'required|string|max:50|unique:users,username,' . $user->id, 'full_name' => 'required|string|max:100', 'email' => 'required|email|max:100', 'password' => 'nullable|min:8', 'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048']);
        if (!empty($data['password'])) $data['password'] = Hash::make($data['password']); else unset($data['password']);
        if ($request->hasFile('avatar')) $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        $user->update($data);
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user) { $user->delete(); return back()->with('success', 'User deleted successfully.'); }
}
