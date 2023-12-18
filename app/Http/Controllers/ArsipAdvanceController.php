<?php

namespace App\Http\Controllers;

use App\Models\ArsipAdvance;
use Illuminate\Http\Request;

class ArsipAdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'arsip_advances' => ArsipAdvance::all()
        ];

        return view('arsip_advance.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('arsip_advance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required'
        ], [
            'title.required' => 'Nama Arsip Advance harus diisi',
            'file.required' => 'File Arsip Advance harus diisi'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time() . '.' . $file->extension();
            $destinationPath = storage_path('app/public/my_files');
            $file->move($destinationPath, $name);
        }

        ArsipAdvance::create([
            'title' => $request->title,
            'file' => $name
        ]);

        return redirect()->route('arsip_advances.index')->with('success', 'Arsip berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ArsipAdvance $arsipAdvance)
    {
        $data = [
            'arsip_advance' => $arsipAdvance,
            'extension_file' => pathinfo(storage_path('app/public/my_files/'.$arsipAdvance->file), PATHINFO_EXTENSION),
        ];

        return view('arsip_advance.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipAdvance $arsipAdvance)
    {
        $data = [
            'arsip_advance' => $arsipAdvance
        ];

        return view('arsip_advance.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArsipAdvance $arsipAdvance)
    {
        $request->validate([
            'title' => 'required'
        ], [
            'title.required' => 'Nama Arsip Advance harus diisi'
        ]);

        if ($request->hasFile('file')) {
            unlink(storage_path('app/public/my_files/' . $arsipAdvance->file));
            $file = $request->file('file');
            $name = time() . '.' . $file->extension();
            $destinationPath = storage_path('app/public/my_files');
            $file->move($destinationPath, $name);
        }

        $arsipAdvance->update([
            'title' => $request->title,
            'file' => $name ?? $arsipAdvance->file
        ]);

        return redirect()->route('arsip_advances.index')->with('success', 'Arsip Advance berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipAdvance $arsipAdvance)
    {
        unlink(storage_path('app/public/my_files/' . $arsipAdvance->file));
        $arsipAdvance->delete();

        return redirect()->route('arsip_advances.index')->with('success', 'Arsip Advance berhasil dihapus');
    }
}
