<x-layout>
    <x-slot name="header">Dashboard</x-slot>

    <div>
        <div class="flex gap-5">
            <span class="w-10 h-3 bg-blue-900 rounded-3xl mt-2"></span>
            <div>
                <h1 class="text-xl mb-2 font-semibold text-gray-900">Hi, {{ auth()->user()->name }}!</h1>
                <p>Selamat datang</p>
            </div>
        </div>
    </div>

    @if (auth()->user()->role == 'admin')
        <x-alert type="warning">Silahkan mengecek data pendaftaran beserta bukti pembayaran para calon siswa!.</x-alert>
    @endif

    @if (auth()->user()->payments->count() > 0)
        @if (auth()->user()->payments->last()->status == 'pending')
            <x-alert type="warning">Pembayaran sedang diverifikasi, tunggu informasi selanjutnya.</x-alert>
        @endif

        @if (auth()->user()->payments->last()->status == 'accepted')
            <x-alert type="success">Pembayaran telah diverifikasi, silahkan untuk melakukan proses selanjutnya.</x-alert>
        @endif

        @if (auth()->user()->payments->last()->status == 'rejected')
            <x-alert type="danger">Pembayaran gagal, silahkan coba kembali</x-alert>
        @endif
    @endif
</x-layout>
