<x-layout>
    <x-slot name="header">Detail Pendaftaran <span class="font-bold">{{ $user->name }}</span></x-slot>

    <div class="bg-white shadow rounded-lg p-10">
        <table class="mb-10">
            <tr>
                <td class="py-3 px-6">NISN</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->nisn }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Nama</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->name }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Jenis Kelamin</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Asal Sekolah</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->nama_sekolah }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Email</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->email }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Nomor Handphone</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->no_telp }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Nomor Handphone Ayah</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->no_telp_ayah }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6">Nomor Handphone Ibu</td>
                <td class="py-3 px-6">:</td>
                <td class="py-3 px-6">{{ $user->no_telp_ibu }}</td>
            </tr>
        </table>

        <a href="{{ route('payment.index') }}">
            <x-btn-primary>Kembali</x-btn-primary>
        </a>
    </div>
</x-layout>
