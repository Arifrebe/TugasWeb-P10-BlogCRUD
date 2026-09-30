# Tugas Rutin 10 — Blog CRUD Laravel

## Deskripsi

Project ini merupakan implementasi CRUD Blog menggunakan Laravel dengan fitur validasi, pagination, pencarian, soft delete, dan upload gambar.

## Fitur

* CRUD Post
* Route Resource
* Named Routes
* Route Model Binding
* Blade Master Layout
* Blade Components

  * Alert
  * Card
* Validasi form
* Error validation per field
* Old input
* Flash message
* Pagination
* Pencarian post
* Soft Delete
* Upload gambar

## Teknologi

* Laravel
* PHP
* MySQL
* Blade
* Tailwind CSS CDN

## Struktur Halaman

```text
/posts
/posts/create
/posts/{post}
/posts/{post}/edit
```

## Instalasi

Clone repository:

```bash
git clone <https://github.com/Arifrebe/TugasWeb-P10-BlogCRUD.git>
```

Masuk ke folder project:

```bash
cd TugasWeb-P10-BlogCRUD
```

Install dependency:

```bash
composer install
```

Salin file environment:

```bash
copy .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Atur database pada file `.env`, kemudian jalankan:

```bash
php artisan migrate
```

Buat symbolic link untuk upload gambar:

```bash
php artisan storage:link
```

Jalankan project:

```bash
php artisan serve
```

Buka:

```text
http://127.0.0.1:8000/posts
```

## Repository

Nama repository:

```text
TugasWeb-P10-BlogCRUD
```

