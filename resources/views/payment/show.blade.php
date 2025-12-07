<x-layout>
    <x-slot name="header">Bukti Pembayaran <span class="font-bold">{{ $payment->user->name }}</span></x-slot>

    <div class="bg-white rounded-lg p-10 text-center">
        <img src="{{ '/storage/' . $payment->bukti_bayar }}" alt="bukti pembayaran {{ $payment->user->name }}"
            class="mx-auto">

        <div class="my-5">
            <p>Nama Bank: <span class="font-bold">{{ $payment->nama_bank }}</span></p>
            <p>Nama Pemilik Rekening: <span class="font-bold">{{ $payment->nama_pemilik }}</span></p>
            <p>Nominal: <span class="font-bold">{{ $payment->nominal }}</span></p>
        </div>

        <a href="{{ route('payment.index') }}"
            class="bg-blue-800 hover:bg-blue-900 text-white  py-2 px-4 rounded mt-5">Kembali </a>
    </div>
</x-layout>
