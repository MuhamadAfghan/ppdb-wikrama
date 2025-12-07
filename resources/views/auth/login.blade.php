<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://ppdb.smkwikrama.sch.id/assets/landingpage/images/logo.png" rel='shortcut icon'>

    <title>PPDB SMK Wikrama Bogor || LOGIN</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="https://ppdb.smkwikrama.sch.id/assets/template/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://ppdb.smkwikrama.sch.id/assets/landingpage/css/font-awesome.css">

    <!-- custom css -->
    <link rel="stylesheet" href="https://ppdb.smkwikrama.sch.id/assets/template/css/login.css">
    <link href="https://ppdb.smkwikrama.sch.id/assets/template/css/preloader.css" rel="stylesheet">
    <style>
        .text-sm {
            font-size: 0.875rem
                /* 14px */
            ;
            line-height: 1.25rem
                /* 20px */
            ;
        }

        .text-red-600 {
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity))
                /* #dc2626 */
            ;
        }

        .space-y-1> :not([hidden])~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.25rem
                    /* 4px */
                    * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.25rem
                    /* 4px */
                    * var(--tw-space-y-reverse));
        }

        .text-sm {
            font-size: 0.875rem
                /* 14px */
            ;
            line-height: 1.25rem
                /* 20px */
            ;
        }
    </style>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <div class="content-sign">
        <div class="d-flex flex row g-0">
            <div class="col-lg-6">
                <div class="card card2">
                    <img src="https://ppdb.smkwikrama.sch.id/assets/landing page/images/hero2.jpg" class="w-100">
                </div>
            </div>
            <form method="POST" action="{{ route('login.authenticate') }}" class="col-lg-6">
                @csrf
                <div class="card card1 p-3">
                    <h2 class="title">Login</h2>
                    <p>Masuk ke Akun PPDB-mu</p>
                    <div class="d-flex flex-column mt-3">
                        <div class="input-field ">
                            <label>Email</label>
                            <span class="fa fa-user p-2"></span>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                placeholder="Masukkan email terdaftar">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="input-field password">
                            <label>Password</label>
                            <span class="fa fa-lock"></span>
                            <input class="form-control password-field" type="password" name="password"
                                placeholder="Masukkan password anda" id="password">
                            <span onclick="toggle('password')"><i class="fa fa-eye toggle-hide"
                                    onclick="myFunction(this)"></i> </span>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="text-center">
                            <button type="submit"
                                class="my-4 btn btn-blue gradient sign d-flex justify-content-center align-items-center">Login</button>
                            <a href="{{ route('register') }}" class="text-sm">Belum punya akun? Daftar sekarang</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/jquery/jquery.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/template/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="https://ppdb.smkwikrama.sch.id/assets/landing page/js/scrollreveal.min.js"></script>

    <script src="https://ppdb.smkwikrama.sch.id/assets/template/js/script.js"></script>
    <!-- Global Init -->
    <script src="https://ppdb.smkwikrama.sch.id/assets/landing page/js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function toggle(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction(show) {
            show.classList.toggle("fa-eye-slash");
        }

        function alert(title = 'Waduhh', message = '', icon = 'warning') {
            Swal.fire({
                icon: icon,
                title: title,
                text: message,
            });
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
</body>

</html>
