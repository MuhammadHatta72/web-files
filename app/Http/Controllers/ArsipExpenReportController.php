<?php

namespace App\Http\Controllers;

use App\Models\ArsipExpenReport;
use Illuminate\Http\Request;

class ArsipExpenReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'arsip_expen_reports' => ArsipExpenReport::all(),
        ];

        return view('arsip_expen_report.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('arsip_expen_report.create');
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
            'title.required' => 'Nama Arsip Expen Report tidak boleh kosong',
            'file.required' => 'File Arsip Expen Report tidak boleh kosong',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time() . '.' . $file->extension();
            $destinationPath = storage_path('app/public/my_files');
            $file->move($destinationPath, $name);
        }

        ArsipExpenReport::create([
            'title' => $request->title,
            'file' => $name,
        ]);

        return redirect()->route('arsip_expen_reports.index')->with('success', 'Arsip Expen Report berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ArsipExpenReport $arsipExpenReport)
    {
        $data = [
            'arsip_expen_report' => $arsipExpenReport,
            'extension_file' => pathinfo(storage_path('app/public/my_files/'.$arsipExpenReport->file), PATHINFO_EXTENSION),
        ];

        return view('arsip_expen_report.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipExpenReport $arsipExpenReport)
    {
        $data = [
            'arsip_expen_report' => $arsipExpenReport,
        ];

        return view('arsip_expen_report.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArsipExpenReport $arsipExpenReport)
    {
        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Nama Arsip Expen Report tidak boleh kosong',
        ]);

        if ($request->hasFile('file')) {
            unlink(storage_path('app/public/my_files/' . $arsipExpenReport->file));
            $file = $request->file('file');
            $name = time() . '.' . $file->extension();
            $destinationPath = storage_path('app/public/my_files');
            $file->move($destinationPath, $name);
        }

        $arsipExpenReport->update([
            'title' => $request->title,
            'file' => $name ?? $arsipExpenReport->file,
        ]);

        return redirect()->route('arsip_expen_reports.index')->with('success', 'Arsip Expen Report berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipExpenReport $arsipExpenReport)
    {
        unlink(storage_path('app/public/my_files/' . $arsipExpenReport->file));
        $arsipExpenReport->delete();

        return redirect()->route('arsip_expen_reports.index')->with('success', 'Arsip Expen Report berhasil dihapus');
    }
}
