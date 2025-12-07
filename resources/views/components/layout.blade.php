<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="https://smkwikrama.sch.id/assets2/wikrama-logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/select2/css/select2.min.css">
    <script src="https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">

    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/preloader.css" rel="stylesheet">

    {{-- Flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        @media (min-width: 768px) {
            .md\:w-\[calc\(100\%-280px\)\] {
                width: calc(100% - 280px);
            }
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #1e40af;
            color: white;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple,
        .select2-container--default.select2-container--focus .select2-selection--single {
            border-color: #1e40af;
        }

        @media not all and (min-width: 768px) {
            .max-md\:hidden {
                display: none;
            }
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>

<body class="min-h-screen font-sans antialiased bg-gray-100">
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <div id="background_navbar" class="absolute w-full h-32 bg-blue-950"></div>
    <div id="background_open_sidebar_mobile" class="absolute z-50 hidden w-full h-screen md:hidden bg-blue-950/80">
    </div>
    <div class="flex w-full ">
        <x-sidebar />
        <main
            class="w-full md:w-[calc(100%-280px)]  flex flex-col justify-between h-screen ease-in-out duration-500  md:ms-auto bg-gray-100"
            id="main-content">
            <div>
                <x-navbar></x-navbar>
                <div class="relative p-5 space-y-7">
                    @if (isset($header))
                        <header class="mb-5 bg-white rounded-md shadow">
                            <div
                                class="flex items-center justify-between gap-5 px-4 py-6 font-semibold sm:px-6 lg:px-8 text-blue-950">
                                <h1 class="text-xl truncate hover:text-clip lg:text-2xl">{{ $header }}</h1>
                                <a class="text-sm" href="{{ route('dashboard') }}">Dashboard</a>
                            </div>
                        </header>
                    @endif

                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#preloader').fadeOut();

            $('#background_open_sidebar_mobile').on('click', function() {
                // $('#sidebar').toggleClass('truncate')
                $('#sidebar').toggle('hidden');
                $(this).toggleClass('hidden');
            });

            $('#sidebar-toggle').on('click', () => {
                // $('#sidebar').toggleClass('truncate')
                $('#sidebar').toggle('hidden')
                if (window.innerWidth >= 768) {
                    $('#main-content').toggleClass('md:w-[calc(100%-280px)]')
                } else {
                    $('#main-content').toggleClass('md:w-full')
                    $('#background_open_sidebar_mobile').toggleClass('hidden')
                }
            })

        })

        function alert(title = 'Waduhh', message = '', icon = 'warning') {
            Swal.fire({
                icon: icon,
                title: title,
                text: message,
            });
        }

        function confirm(title = 'Kamu yakin?', message, form_id = null) {
            Swal.fire({
                    title: title,
                    text: message,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya!',
                    cancelButtonText: 'Tidak',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(form_id).submit()
                    }
                })
        }

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

    @stack('scripts')

</body>

</html>
