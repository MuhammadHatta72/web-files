<?php

namespace App\Http\Controllers;

use App\Models\ArsipTravel;
use Illuminate\Http\Request;

class ArsipTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= [
            'arsip_travels' => ArsipTravel::all(),
        ];
        return view('arsip_travel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('arsip_travel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
        ], [
            'title.required' => 'Judul Arsip Travel tidak boleh kosong',
            'file.required' => 'File Arsip Travel tidak boleh kosong',
        ]);

        if($request->hasFile('file')){
            $file = $request->file('file');
            $name = time().'.'.$file->extension();
            $destinationPath = storage_path('app/public/my_files');
            $file->move($destinationPath, $name);
        }

        ArsipTravel::create([
            'title' => $request->title,
            'file' => $name,
        ]);

        return redirect()->route('arsip_travels.index')->with('success', 'Arsip Travel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ArsipTravel $arsipTravel)
    {
        $data = [
            'arsip_travel' => $arsipTravel,
            'extension_file' => pathinfo(storage_path('app/public/my_files/'.$arsipTravel->file), PATHINFO_EXTENSION),
        ];
        return view('arsip_travel.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipTravel $arsipTravel)
    {
        $data = [
            'arsip_travel' => $arsipTravel,
        ];
        return view('arsip_travel.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArsipTravel $arsipTravel)
    {
        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Judul Arsip Travel tidak boleh kosong',
        ]);

        if($request->hasFile('file')){
            unlink(storage_path('app/public/my_files/'.$arsipTravel->file));
            $file = $request->file('file');
            $name = time().'.'.$file->extension();
            $destinationPath = storage_path('app/public/my_files');
            $file->move($destinationPath, $name);
        }

        $arsipTravel->update([
            'title' => $request->title,
            'file' => $name ?? $arsipTravel->file,
        ]);

        return redirect()->route('arsip_travels.index')->with('success', 'Arsip Travel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipTravel $arsipTravel)
    {
        unlink(storage_path('app/public/my_files/'.$arsipTravel->file));
        $arsipTravel->delete();
        return redirect()->route('arsip_travels.index')->with('success', 'Arsip Travel berhasil dihapus');
    }
}
