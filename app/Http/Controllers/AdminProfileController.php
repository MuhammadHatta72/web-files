<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        // Jika password inputan tidak sama
        if (!password_verify($request->password, $user->password)) {
            $rules['password'] = 'min:4|max:100';

            $data = $request->validate($rules);

            User::where('id', $id)->update([
                'password' => Hash::make($data['password'])
            ]);
            return back()->with('success', 'Password berhasil diubah!');
        } else if (password_verify($request->password, $user->password)) { // Jika sama
            return back()->with('success', 'Password tidak diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
