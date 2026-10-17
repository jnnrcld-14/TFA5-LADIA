<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('full_name')->get();
        return view('customers.index', compact('customers'));
    }

    public function create() { return view('customers.create'); }

    public function store(Request $request) {
        $data = $request->validate(['full_name' => 'required|string|max:100', 'email' => 'required|email|max:100']);
        Customer::create($data);
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    public function edit(Customer $customer) { return view('customers.edit', compact('customer')); }

    public function update(Request $request, Customer $customer) {
        $data = $request->validate(['full_name' => 'required|string|max:100', 'email' => 'required|email|max:100']);
        $customer->update($data);
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer) { $customer->delete(); return back()->with('success', 'Customer deleted successfully.'); }
}
