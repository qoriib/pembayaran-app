# Laravel 12 + Filament 3 + Docker + phpMyAdmin

Project ini merupakan aplikasi manajemen data pembayaran berbasis Laravel 12 dan Filament 3, yang berjalan dalam lingkungan Docker lengkap dengan phpMyAdmin untuk manajemen database.

## Struktur Direktori

```
project-root/
├── docker-compose.yml
├── Dockerfile
├── README.md
├── .env # Untuk Docker (jika diperlukan)
├── src/ # Source code Laravel
│ ├── artisan
│ ├── composer.json
│ └── ...
```

## Fitur

- Laravel 12
- Filament 3 (Admin Panel)
- CRUD data Pembayaran
- Dockerized (App + MySQL + phpMyAdmin)
- Auto-migrate + seeding + admin user setup via `.env`

## Cara Menjalankan

### 1. **Clone Project**

```bash
git clone https://github.com/your-user/pembayaran-app.git
cd pembayaran-app
```

### 2. **Set Environment Laravel**

Edit file `src/.env` dan sesuaikan koneksi database:

```env
ADMIN_EMAIL=admin@example.com
ADMIN_PASSWORD=secret123
```

## Jalankan Docker

```bash
docker-compose up --build -d
```

Docker akan:

- Build container Laravel dan MySQL
- Jalankan `php artisan migrate:fresh --seed`
- Membuat user admin otomatis dari `.env`
- Menjalankan Laravel di [http://localhost:8000](http://localhost:8000)
- Menyediakan phpMyAdmin di [http://localhost:8080](http://localhost:8080)

## Login Filament Admin

Akses: [http://localhost:8000/admin](http://localhost:8000/admin)

Gunakan kredensial dari `.env`:

```env
Email    : admin@example.com
Password : secret123
```

## CRUD: Pembayaran

Data `pembayaran` memiliki field:

- `nama`
- `metode` (Transfer, Cash, E-Wallet)
- `jumlah`
- `tanggal`

Tersedia fitur:

- Tambah, Edit, Hapus
- Filter & Pencarian
- Sort dan Format

## Hentikan & Bersihkan

```bash
docker-compose down
```
