<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tanda Bukti Pendaftaran</title>
    <style>
        * {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 10px;
            vertical-align: top;
        }

        .header-table {
            /* width: 100%; */
            margin-bottom: 10px;
        }

        .header-table img {
            width: 110px;
            height: 110px;
        }

        .header-table h1 {
            font-size: 20px;
        }

        .header-table p {
            margin-bottom: 5px;
        }

        .section-title {
            font-size: 19px;
            background-color: #cccccc;
            padding: 3px;
            /* margin-top: 20px; */
            margin-bottom: 10px;
            font-weight: bold;
        }

        .content-table td {
            padding: 5px;
        }

        .content-table {
            margin-bottom: 20px;
        }

        .info-text {
            font-size: 18px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <table class="header-table">
        <tr>
            <td style="width: 110px; vertical-align: top;">
                <img src="https://smkwikrama.sch.id/assets2/wikrama-logo.png" alt="logo wikrama">
            </td>
            <td>
                <h1>Panitia Penerimaan Peserta Didik Baru</h1>
                <h1>SMK Wikrama Bogor TP. 2023-2024</h1>
                <p>Jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor</p>
                <p>Email : prohumasi@smkwikrama.sch.id | Website : https://smkwikrama.sch.id</p>
            </td>
        </tr>
    </table>

    <div style="text-align:center; margin-bottom: 20px;">
        <h1 style="font-size: 21px;">Tanda Bukti Pendaftaran</h1>
        <h1 style="font-size: 19px;">SMK Wikrama Bogor TP.2024-2025</h1>
    </div>

    <table>
        <tr>
            <td style="width: 50%; vertical-align: top;">
                <div class="section-title">I. BIODATA CALON PESERTA DIDIK</div>
                <table class="content-table">
                    <tr>
                        <td style="font-weight: bold;">TANGGAL DAFTAR</td>
                        <td>:</td>
                        <td>s</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NOMOR SELEKSI</td>
                        <td>:</td>
                        <td>s}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NAMA LENGKAP</td>
                        <td>:</td>
                        <td>{s}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NISN</td>
                        <td>:</td>
                        <td>{s $rs</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">ASAL SEKOLAH</td>
                        <td>:</td>
                        <td>{as}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NO HP</td>
                        <td>:</td>
                        <td>{a}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">EMAIL</td>
                        <td>:</td>
                        <td>{dada</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NO HP Ayah</td>
                        <td>:</td>
                        <td>{dada</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">NO HP Ibu</td>
                        <td>:</td>
                        <td>as</td>
                    </tr>
                </table>

                <div class="section-title">II. INFORMASI DAN PERSYARATAN</div>
                <div>
                    <h2 class="info-text">A. Akun Anda</h2>
                    <p class="info-text">Akses <a href="{{ route('login') }}">{{ route('login') }}</a>, login gunakan
                    </p>
                    <p class="info-text">Email: sa</p>
                    <p class="info-text">Password: {sad</p>
                    <p class="info-text">Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama
                        Bogor.</p>
                </div>
            </td>

            <td style="width: 50%; vertical-align: top;">
                <div>
                    <h2 class="info-text">B. Foto/Scan Dokumen yang Harus Dipersiapkan</h2>
                    <p class="info-text">1. Persyaratan satu</p>
                    <p class="info-text">2. Persyaratan dua</p>
                    <p class="info-text">3. Persyaratan tiga</p>
                </div>

                <div style="margin-top: 20px;">
                    <h2 class="info-text">C. Biaya Seleksi</h2>
                    <p class="info-text">Pembayaran uang seleksi sebesar Rp. 200.000 melalui transfer bank:</p>
                    <p class="info-text">Bank BNI: 123456789 A.N SMK Wikrama Sekolah.</p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
