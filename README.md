## software yang harus di install

Berikut merupakan beberapa software yang harus di install untuk menjalankan aplikasi ini:

- [xampp](https://laravel.com/docs/routing).
- [vscode](https://laravel.com/docs/container).
- [composer](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.

## extention yang dibutuhkan

Berikut merupakan beberapa extention yang harus di install untuk menjalankan aplikasi ini:

- [Laravel](https://laravel.com/docs/11.x/installation).
- [Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/installation.html).
- [livewire](https://laravel-livewire.com/docs/2.x/installation). -> composer require livewire/livewire

## Setup Database 

- jalankan -> php artisan migrate

## Upload file excel 
pastikan data php.ini sesuai dengan 
;upload_tmp_dir = "D:\Jobs\tesis 25 06 2024\temp"
file_uploads = On
upload_max_filesize = 10M
post_max_size = 10M
max_file_uploads = 20
max_execution_time = 300
memory_limit = 256M

## Prosedur menjalankan web app
- untuk menjalankan program hidupkan server php dan mysql terlebih dahulu
- lalu jalankan perintah  ->  npm run dev
- untuk pertama kali setup data awal dengan -> php artisan db:seed
- akses web app dengan mengakses localhost atau link spkpppk-app.test
