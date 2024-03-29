## Tentang Ta'lim

Talim adalah proyek edukasi open source yang dapat dimanfaatkan siapapun untuk mengembangkan dakwahnya.

## Teknologi

Untuk back end, kami menggunakan _Laravel_ sebagai framework yang powerfull yang bisa menciptakan segala kebutuhan dalam satu tempat.

## Fitur-fitur aplikasi

-   Manajemen yayasan
-   Manajemen fakultas
-   Manajemen jurusan
-   Manajemen mata kuliah
-   Manajemen siswa
-   Manajemen SKS
-   Manajemen nilai
-   Manajemen staff

## Setup proyek

### Clone
Pastikan environment sudah terinstall *PHP* dan *MySQL*
```console
git clone https://github.com/agunbuhori/talim.git 
cd talim && composer install
```
Lakukan setup awal
```console
php artisan migrate --seed
```
Jalankan aplikasi dengan command berikut
```console
php artisan serve
```

## Fitur proyek

Untuk membuat file repository, gunakan perintah berikut
```console
php artisan make:repository {nama model}
```
contoh
```console
php artisan make:repository User
```

## Kontribusi

Kami sangat bersyukur jika ada yang berkenan untuk berkontribusi di proyek ini, semoga niat dan usahanya dibalas dengan kebaikan oleh Allah subhanahu wata'ala.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
