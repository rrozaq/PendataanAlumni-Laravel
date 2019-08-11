# Aplikasi Pendataan Alumni

Situs dan aplikasi pendataan alumni. Dibuat menggunakan Laravel 5.8 dan package-package lain yang sangat membantu.

## Fitur Frontpage
- Halaman depan
- Halaman pencarian
- Halaman profile
- Halaman login
- Halaman login user, jika belum login tidak bisa profile penuh alumni.

## Fitur Dashboard
- Dashboard dengan laporan statistik
- Manajemen data alumni
- Manajemen data admin

## Instalasi
1. Clone repositori ini
2. Jalaknkan `composer install`
3. Sesuaikan konfigurasi database pada file `.env`
4. Jalankan migrasi dan seeding dengan perintah
```
$ artisan migrate
$ artisan db:seed
```

## Info
anda harus mendapatkan api dari amikom, untuk bisa menggunakan fungsi login user agar data alumni bisa terlihat semua.

5. Done