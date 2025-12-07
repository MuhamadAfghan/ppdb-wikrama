# Sistem PPDB SMK Wikrama Bogor

Aplikasi web untuk mengelola Penerimaan Peserta Didik Baru (PPDB) SMK Wikrama Bogor Tahun Pelajaran 2024-2025. Proyek ini merupakan kloning dari sistem yang sudah ada, dikembangkan sebagai tugas pembelajaran untuk memahami alur kerja aplikasi PPDB berbasis Laravel.

## Tentang Proyek

Sistem PPDB ini adalah aplikasi berbasis web yang dikembangkan untuk memfasilitasi proses pendaftaran siswa baru di SMK Wikrama Bogor. Aplikasi ini menyediakan platform digital yang memudahkan calon siswa untuk mendaftar dan melakukan pembayaran pendaftaran secara online.

## Tujuan Proyek

1. **Digitalisasi Proses Pendaftaran** - Mengubah proses pendaftaran manual menjadi sistem online yang lebih efisien
2. **Kemudahan Akses** - Memudahkan calon siswa mendaftar dari mana saja dan kapan saja
3. **Manajemen Pembayaran** - Mengelola verifikasi pembayaran pendaftaran secara terstruktur
4. **Transparansi** - Memberikan transparansi status pendaftaran dan pembayaran kepada calon siswa
5. **Efisiensi Administrasi** - Mempermudah tim admin dalam mengelola data pendaftar dan verifikasi pembayaran

## Fitur Utama

### Untuk Calon Siswa (Student)
- Registrasi akun dengan data lengkap (NISN, nama, email, jenis kelamin, asal sekolah, kontak)
- Login ke sistem
- Upload bukti pembayaran pendaftaran
- Melacak status verifikasi pembayaran (pending, accepted, rejected)
- Mengajukan ulang pembayaran jika ditolak
- Download bukti pendaftaran dalam format PDF

### Untuk Admin
- Login ke sistem dengan akses khusus
- Melihat daftar semua pembayaran yang masuk
- Verifikasi bukti pembayaran (menerima atau menolak)
- Mengelola data pendaftar

## Teknologi yang Digunakan

- **Framework**: Laravel 11.x
- **Bahasa**: PHP 8.2+
- **Database**: MySQL/PostgreSQL
- **Frontend**: Blade Templates, TailwindCSS
- **PDF Generator**: DomPDF (Laravel-DomPDF)
- **Build Tools**: Vite, PostCSS

## Struktur Database

### Tabel Users
Menyimpan data calon siswa dan admin:
- NISN (unik)
- Nama lengkap
- Email (unik)
- Jenis kelamin
- Nama sekolah asal
- Nomor telepon (siswa, ayah, ibu)
- Role (admin/student)

### Tabel Payments
Menyimpan data pembayaran pendaftaran:
- ID User (foreign key)
- Nama pemilik rekening
- Nama bank
- Nominal pembayaran
- Bukti bayar (file upload)
- Status (pending/accepted/rejected)

## Instalasi

1. Clone repository
```bash
git clone https://github.com/MuhamadAfghan/ppdb-wikrama.git
cd ppdb-wikrama
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ppdb_wikrama
DB_USERNAME=root
DB_PASSWORD=
```

5. Jalankan migrasi dan seeder
```bash
php artisan migrate:fresh --seed
```

6. Build assets
```bash
npm run dev
```

7. Jalankan aplikasi
```bash
php artisan serve
```

Akses aplikasi di `http://localhost:8000`

## Workflow Pendaftaran

1. Calon siswa melakukan registrasi dengan mengisi data lengkap
2. Login ke sistem menggunakan email dan password
3. Upload bukti pembayaran pendaftaran (nama bank, nama pemilik rekening, nominal, foto bukti)
4. Status pembayaran akan menjadi "pending"
5. Admin melakukan verifikasi pembayaran
6. Jika diterima, status berubah menjadi "accepted" dan siswa dapat download bukti pendaftaran
7. Jika ditolak, status menjadi "rejected" dan siswa dapat mengajukan ulang

## Kontribusi

Proyek ini dikembangkan untuk SMK Wikrama Bogor. Untuk kontribusi atau pertanyaan, silakan hubungi tim pengembang.

## Lisensi

Proyek ini dikembangkan menggunakan Laravel framework yang berlisensi [MIT license](https://opensource.org/licenses/MIT).
