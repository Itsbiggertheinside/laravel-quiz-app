<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // for default admin
        \App\Models\User::insert([
            'name' => 'Tufan Kılınç',
            'email' => 'tufankilinc@outlook.com',
            'email_verified_at' => now(),
            'type' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ]);
        // \App\Models\User::factory(1)->create();

        // Bu eski bir yöntem ancak ( php artisan db:seed --class="QuizSeeder" ) komutu ile spesifik fake data oluşturmada önemli
        $this->call([
            QuizSeeder::class,
        ]);
    }
}
