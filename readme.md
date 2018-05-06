# Gerçek zamanlı pizza takip sistemi - Laravel, Vue & Pusher
🍕🍕🍕

## Kurulum

1. repo yu klonlayın git clone RepoUrl.
1. `composer install`
1. adını değiştirin `.env.example` dosyasını `.env`
1. veri tabanı bilgilerini girin `.env` dosyasına
1. `.env` dosyasında değiştirin `BROADCAST_DRIVER` değişken değerini `pusher` yapın
1. pusher bilgilerini girin `.env` dosyasına. `config/broadcasting.php` dosyasında da gerekli düzenlemeleri yapın
1. konsolda çalıştırın `php artisan migrate`
1. konsolda çalıştırın `php artisan key:generate`
1. pusher app keyini `resources/assets/js/bootstrap.js` dosyasına girin
1. konsolda çalıştırın `npm install`
1. konsolda çalıştırın `npm run dev`
1. konsolda çalıştırın `php artisan serve`
1. tarayıcıda adrese gidin localhost:8000
1. üye olup anasayfaya gidin ve pizza sipişi verin. Sipariş durumunu değiştirmek için /admin url sini ziyaret edin.
