<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        if ($request->nama_sekolah == null) {
            return redirect()->back()->with('warning', 'Pilih Asal Sekolah')->withInput();
        }

        if ($request->jenis_kelamin != 'l' && $request->jenis_kelamin != 'p') {
            return redirect()->back()->with('warning', 'Pilih Jenis Kelamin')->withInput();
        }
        // dd($request->all());
        // Validate and create registration record
        $validated = $request->validate([
            'nisn' => 'required|string|max:255|unique:users,nisn',
            'jenis_kelamin' => 'required|string|max:1',
            'name' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'no_telp' => 'required|string|max:255',
            'no_telp_ayah' => 'required|string|max:255',
            'no_telp_ibu' => 'required|string|max:255',
        ]);

        if ($validated['nama_sekolah'] == 'OTHER') {
            if ($request->nama_sekolah_lainnya == null) {
                return redirect()->back()->with('warning', 'Tuliskan Asal Sekolah ')->withInput();
            }
            $validated['nama_sekolah'] = $request->nama_sekolah_lainnya;
        }

        $validated['jenis_kelamin'] = $request->jenis_kelamin == 'l' ? 'Laki - laki' : 'Perempuan';

        // $validated['password'] = bcrypt(substr($request->name, 0, 3) . substr($request->email, 0, 3));
        // $validated['password'] = substr($request->name, 0, 3) . substr($request->email, 0, 3);
        $validated['password'] = bcrypt($request->nisn);
        // dd($validated);
        $registration = User::create($validated);

        $pdf = Pdf::loadView('auth.pdf.registration', ['registration' => $registration]);

        return $pdf->setPaper('a4', 'landscape')->stream();
    }
}