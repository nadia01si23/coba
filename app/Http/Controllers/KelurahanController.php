<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
        return view('admin.kelurahan', compact('list_kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_kelurahan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string',
        ]);

        Kelurahan::create($validated);
        return redirect('admin/kelurahan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelurahan = kelurahan::find($id)
        return view('admin.detail_kelurahan', compact('kelurahan'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
