<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $merchants = Merchant::all(); // Fix the typo here

    return view('list-of-merchants', compact('merchants'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'owner' => 'required|string',
            'employee' => 'required|string',
        ]);

        Merchant::create($request->all());
        
        return redirect()->route('merchants.index');
            

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merchant = Merchant::find($id);

        return view('edit', compact('merchant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'owner' => 'required|string',
            'employee' => 'required|string',
        ]);

        $merchant = Merchant::find($id);
        $merchant->update($request->all());

        return redirect()->route('merchants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merchant = Merchant::find($id);
        $merchant->delete();

        return redirect()->route('merchants.index')->with('success', 'Merchant deleted successfully.');
    }
}
