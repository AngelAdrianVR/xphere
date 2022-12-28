<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sphere;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Sphere::factory(5)->create();
        \App\Models\User::factory(25)->create();
        \App\Models\Device::factory(3)->create();
        \App\Models\GuestType::factory(5)->create();
        \App\Models\Facility::factory(5)->create();
        \App\Models\Notice::factory(5)->create();
        \App\Models\ReservationFacility::factory(5)->create();
        \App\Models\Post::factory(5)->create();
        \App\Models\Vehicle::factory(5)->create();
        \App\Models\FavoriteGuest::factory(5)->create();
        \App\Models\Guest::factory(10)->create();
        \App\Models\Payment::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'Gladiolas 301',
            'email' => 'test@example.com',
        ]);

        // \App\Models\GuestType::factory()->create([
        //     ['name' => 'Familia'],
        //     ['name' => 'Proveedor'],
        //     ['name' => 'Servicios'],
        //     ['name' => 'Paquetería'],
        //     ['name' => 'Otro'],
        //     ]);
    }
}
