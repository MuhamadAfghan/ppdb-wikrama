<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('payment.index');
    }

    public function data()
    {
        $payment = Payment::with('user')->whereHas('user', function ($query) {
            $query->where('role', 'student');
        })->get();
        return response()->json(
            [
                'message' => 'success',
                'status' => 200,
                'count' => $payment->count(),
                'data' => $payment,
            ],
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if (auth()->user()->role != 'siswa') {
        //     return redirect()->back()->with('warning', 'Anda bukan siswa');
        // }

        if (auth()->user()->payments->count() > 0) {
            if (auth()->user()->payments->last()->status == 'pending' || auth()->user()->payments->last()->status == 'success') {
                return redirect()->back()->with('warning', 'Anda sudah melakukan pembayaran');
            }
        }

        if ($request->nama_bank == null) {
            return redirect()->back()->with('warning', 'Pilih Nama Bank')->withInput();
        }

        $validated = $request->validate([
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_pemilik' => 'required|string|max:255',
            'nominal' => 'required|string|max:255',
            'nama_bank' => 'required|string|max:255',
        ]);

        if ($request->nama_bank == 'OTHER') {
            if ($request->nama_bank_lainnya == null) {
                return redirect()->back()->with('warning', 'Tuliskan Nama Bank')->withInput();
            }
            $validated['nama_bank'] = $request->nama_bank_lainnya;
        }

        $validated['user_id'] = auth()->user()->id;

        $validated['bukti_bayar'] = $request->file('bukti_bayar')->store('bukti_bayar');

        Payment::create($validated);

        return redirect()->back()->with('success', 'Berhasil dikirim, pembayaran sedang diverifikasi');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $payment = Payment::with('user')->where('id', $id)->first();
        // $payment->load('user');
        // dd($payment);
        return view('payment.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function accepted($id)
    {
        $payment = Payment::find($id);
        if ($payment->status != 'pending') {
            return redirect()->back()->with('warning', 'Pembayaran sudah dikonfirmasi');
        }
        // dd($payment);
        $payment->update(['status' => 'accepted']);
        return redirect()->back()->with('success', 'Pembayaran Berhasil dikonfirmasi');
    }

    public function rejected($id)
    {
        $payment = Payment::find($id);
        if ($payment->status != 'pending') {
            return redirect()->back()->with('warning', 'Pembayaran sudah dikonfirmasi');
        }
        $payment->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Pembayaran Berhasil ditolak');
    }
}
