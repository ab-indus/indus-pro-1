<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lien;
use App\Models\Customer;
use App\Models\LienInfo;



class LienController extends Controller
{
    public function index()
    {
        $liens = LienInfo::all();
        return view('liens.index', compact('liens'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('liens.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $lien = LienInfo::create($request->all());
        return redirect()->route('liens.index')->with('success', 'Lien added successfully.');
    }

    public function edit(LienInfo $lien)
    {
        return view('liens.edit', compact('lien'));
    }

    public function update(Request $request, LienInfo $lien)
    {
        $lien->update($request->all());
        return redirect()->route('liens.index')->with('success', 'Lien updated successfully.');
    }

    public function destroy(LienInfo $lien)
    {
        $lien->delete();
        return redirect()->route('liens.index')->with('success', 'Lien deleted successfully.');
    }
}
