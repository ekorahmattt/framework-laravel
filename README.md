# API Pertemuan 8

1. Clone Repo ini

    ```bash
    git clone https://github.com/Echo271/framework-laravel.git -b api
    cd framework-laravel
    ```

2. Jalankan Composer Install untuk Init project Laravel

    ```bash
    composer install
    ```

3. Buat file `.env`.

    ```bash
    cp .env.example .env
    ```

4. Generate Key

    ```bash
    php artisan key:generate
    ```

5. Jalankan migration dan seeder

    ```bash
    php artisan migrate:fresh --seed
    ```

6. Install Guzzle (Harusnya udah terinstall di Laravel 8)

    ```bash
    composer require guzzlehttp/guzzle
    ```

7. Karena Laravel tidak bisa memanggil API dari URI yang sama dengan si App, jadi kita akan menjalankan dua perintah.

    - Untuk Si App
        ```bash
        php artisan serve --port=8000
        ```

    - Untuk Si API/Backend
        ```bash
        php artisan serve --port=8001
        ```

I knew that it's not very convinient but ada banyak project yang frontend/backendnya dipisah dan dihubungkan menggunakan API.