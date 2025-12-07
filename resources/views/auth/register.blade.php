<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PPDB SMK Wikrama Bogor || LOGIN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2/css/select2.min.css">
    <script src="https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
    <style>
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #1e40af;
            color: white;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple,
        .select2-container--default.select2-container--focus .select2-selection--single {
            border-color: #1e40af;
        }
    </style>
</head>

<body class="min-h-screen p-5" style="background-image: linear-gradient(45deg, #009EC5 0%, #2e7eed 20%, #02225B 50%)">

    <form class="mx-auto bg-white max-w-lg rounded-md px-5 py-10" action="{{ route('register.store') }}" method="POST">
        @csrf
        <header class="text-center mb-10">
            <h1 class="font-bold text-xl">Form Pendaftaran PPDB</h1>
            <h3 class="font-bold text-lg text-gray-700">SMK Wikrama Bogor TP.2024-2025</h3>
        </header>
        <div class="grid grid-cols-2 gap-2 mt-4">
            <div>
                <x-input-label for="nisn" :value="__('NISN')" />
                <x-text-input id="nisn" class="block w-full mt-1" type="number" name="nisn" :value="old('nisn')"
                    required autocomplete="nisn" placeholder="Masukkan NISN" />
                <x-input-error :messages="$errors->get('nisn')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                <x-selected id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin">
                    <option value="l" @selected(old('jenis_kelamin') == 'l')>Laki - laki</option>
                    <option value="p" @selected(old('jenis_kelamin') == 'p')>Perempuan</option>
                </x-selected>
                <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
            </div>
        </div>

        <div class="mt-4">
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')"
                required autocomplete="name" placeholder="Masukkan Nama Lengkap" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="nama_sekolah" :value="__('Asal Sekolah')" />
            <x-selected-advance id="nama_sekolah" name="nama_sekolah" placeholder="Pilih Asal Sekolah" required>
                {{-- https://api-sekolah-indonesia.vercel.app/sekolah/smp?page=1&perPage=1000&kab_kota=020500 --}}
            </x-selected-advance>
            <x-input-error :messages="$errors->get('nama_sekolah')" class="mt-2" />

            {{-- data-ajax--url="https://api-sekolah-indonesia.vercel.app/sekolah/smp?page=1&perPage=1000&kab_kota=020500"
                data-ajax--cache="true" --}}
        </div>

        <div class="mt-4 hidden" id="nama_sekolah_lainnya">
            <x-input-label for="nama_sekolah_lainnya" :value="__('Nama Sekolah')" />
            <x-text-input id="nama_sekolah_lainnya_input" class="block w-full mt-1" type="text"
                name="nama_sekolah_lainnya" placeholder="Masukkan Nama Sekolah" />
            <x-input-error :messages="$errors->get('nama_sekolah_lainnya')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                required autocomplete="name" placeholder="Masukkan Email Aktif" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="no_telp" :value="__('Nomor Handphone')" />
            <x-text-input id="no_telp" class="block w-full mt-1" type="number" name="no_telp" :value="old('no_telp')"
                required autocomplete="name" placeholder="Contoh: 08xxxxxxxx" />
            <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
        </div>

        <div class="grid grid-cols-2 gap-2 mt-4">
            <div>
                <x-input-label for="no_telp_ayah" :value="__('Nomor HP Ayah')" />
                <x-text-input id="no_telp_ayah" class="block w-full mt-1" type="number" name="no_telp_ayah"
                    :value="old('no_telp_ayah')" required autocomplete="no_telp_ayah" placeholder="Contoh: 08xxxxxxxx" />
                <x-input-error :messages="$errors->get('no_telp_ayah')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="no_telp_ibu" :value="__('Nomor HP Ibu')" />
                <x-text-input id="no_telp_ibu" class="block w-full mt-1" type="number" name="no_telp_ibu"
                    :value="old('no_telp_ibu')" required autocomplete="no_telp_ibu" placeholder="Contoh: 08xxxxxxxx" />
                <x-input-error :messages="$errors->get('no_telp_ibu')" class="mt-2" />
            </div>
        </div>

        <div class="mt-10 text-end">
            <a href="/" class="text-blue-900 hover:text-blue-950 me-5">Kembali</a>
            <x-btn-warning type="submit">Registrasi</x-btn-warning>
        </div>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        function alert(title = 'Waduhh', message = '', icon = 'warning') {
            Swal.fire({
                icon: icon,
                title: title,
                text: message,
            });
        }

        $(document).ready(function() {
            // Function to add "LAINNYA" option
            function addOtherOption(data) {
                data.push({
                    id: "OTHER",
                    text: "LAINNYA"
                });
            }

            // Initialize Select2 after fetching data
            function initializeSelect2(schools) {
                $('#nama_sekolah').select2({
                    data: schools,
                    tags: true,
                    createTag: function(params) {
                        return {
                            id: params.term,
                            text: params.term,
                            newOption: true
                        };
                    },
                    insertTag: function(data, tag) {
                        addOtherOption(data);
                    }
                });
            }

            // Fetch schools data and initialize Select2
            $.ajax({
                url: "https://api-sekolah-indonesia.vercel.app/sekolah/smp?page=1&perPage=1000&kab_kota=020500",
                method: "GET",
                success: function(data) {
                    var schools = data.dataSekolah.map(function(school) {
                        return {
                            id: school.sekolah,
                            text: school.sekolah
                        };
                    });

                    addOtherOption(schools);
                    initializeSelect2(schools);
                },
                error: function(error) {
                    console.log(error);
                }
            });

            // Show/hide input field based on selection
            $('#nama_sekolah').on('change', function() {
                if ($(this).val() === 'OTHER') {
                    $('#nama_sekolah_lainnya').removeClass('hidden');
                } else {
                    $('#nama_sekolah_lainnya').addClass('hidden');
                }
            });
        });

        @if (session()->has('success'))
            alert('{{ session('success') }}', '', 'success')
        @endif

        @if (session()->has('error'))
            alert('{{ session('error') }}', '', 'error')
        @endif
        @if (session()->has('warning'))
            alert('{{ session('warning') }}', '', 'warning')
        @endif
    </script>


</body>

</html>
