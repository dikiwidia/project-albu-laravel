<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Code Formatting (Prettier + Tailwind CSS)

Proyek ini memakai [Prettier](https://prettier.io) untuk memformat file Blade, PHP, CSS, dan JS, sekaligus mengurutkan class Tailwind CSS secara otomatis.

### 1. Install dependensi

Paket Prettier sudah tercatat di `devDependencies`, jadi cukup jalankan:

```bash
npm install
```

Jika memasang dari awal di proyek lain, jalankan:

```bash
npm install -D prettier @prettier/plugin-php @shufo/prettier-plugin-blade prettier-plugin-tailwindcss
```

| Paket                          | Fungsi                                              |
| ------------------------------ | --------------------------------------------------- |
| `prettier`                     | Formatter utama                                     |
| `@prettier/plugin-php`         | Format file `*.php`                                 |
| `@shufo/prettier-plugin-blade` | Format file `*.blade.php`                           |
| `prettier-plugin-tailwindcss`  | Mengurutkan class Tailwind (membaca `resources/css/app.css`) |

### 2. Install ekstensi VS Code

```bash
code --install-extension esbenp.prettier-vscode
code --install-extension bradlc.vscode-tailwindcss
code --install-extension onecentlin.laravel-blade
```

### 3. Konfigurasi

Semua konfigurasi sudah tersedia di repository:

- `.prettierrc.json`: aturan format (4 spasi, lebar baris 120, parser `blade` untuk `*.blade.php`, parser `php` untuk `*.php`) dan path stylesheet Tailwind v4.
- `.prettierignore`: folder yang tidak diformat (`vendor`, `node_modules`, `storage`, `public/build`, dan lainnya).
- `.vscode/settings.json`: Prettier sebagai formatter default, format otomatis saat file disimpan, dan IntelliSense Tailwind di file Blade.

Restart VS Code (atau jalankan **Developer: Reload Window**) setelah instalasi.

### 4. Penggunaan

File otomatis diformat setiap kali disimpan. Untuk memformat lewat terminal:

```bash
# Format semua view Blade
npx prettier --write resources/views

# Cek format tanpa mengubah file
npx prettier --check resources/views
```

> **Catatan:** Kode PHP di luar Blade juga dirapikan dengan [Laravel Pint](https://laravel.com/docs/pint) (`vendor/bin/pint --dirty`). Jalankan Pint sebelum commit agar gaya kode PHP tetap konsisten.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
