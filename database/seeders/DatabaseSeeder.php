<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'type' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'created_at' => '2024-05-28 06:17:00',
            'updated_at' => '2024-05-28 06:17:00',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'type' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'created_at' => '2024-05-28 06:17:00',
            'updated_at' => '2024-05-28 06:17:00',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Testosterone',
            'description' => 'The primary male sex hormone and anabolic steroid. It promotes muscle growth, strength gains, and recovery.',
            'price' => '80.00€',
            'round_desc' => 'The primary male sex hormone and anabolic steroid. It promotes muscle growth, strength gains, and recovery.',
            'caliber' => 'Testoviron',
            'mass' => '250 mL',
            'explosive_type' => '10 mL vials',
            'explosive_mass' => 'Unflavored (injectable)',
            'tnt' => 'Injectable',
            'fuze' => '1.2 m',
            'pen' => '205mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Dianabol',
            'description' => 'An oral anabolic steroid known for rapid muscle gains and strength.',
            'price' => '100.00€',
            'round_desc' => 'An oral anabolic steroid known for rapid muscle gains and strength.',
            'caliber' => 'Dbol',
            'mass' => '10 mg',
            'explosive_type' => '100 tablets',
            'explosive_mass' => 'Unflavored (oral tablet)',
            'tnt' => 'Oral tablet',
            'fuze' => '0.05 m',
            'pen' => '440mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Anadrol',
            'description' => 'A powerful oral anabolic steroid used for significant muscle mass and strength gains.',
            'price' => '150.00€',
            'round_desc' => 'A powerful oral anabolic steroid used for significant muscle mass and strength gains.',
            'caliber' => 'Anadrol',
            'mass' => '50 mg',
            'explosive_type' => '50 tablets',
            'explosive_mass' => 'Unflavored (oral tablet)',
            'tnt' => 'Oral tablet',
            'fuze' => '0.01 mm',
            'pen' => '300mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Deca-Durabolin',
            'description' => 'An injectable anabolic steroid known for promoting muscle growth, joint relief, and red blood cell production.',
            'price' => '150.00€',
            'round_desc' => 'An injectable anabolic steroid known for promoting muscle growth, joint relief, and red blood cell production.',
            'caliber' => 'Deca',
            'mass' => '200 mL',
            'explosive_type' => '2 mL vials',
            'explosive_mass' => 'Unflavored (injectable)',
            'tnt' => 'Injectable',
            'fuze' => '0.05 m',
            'pen' => '500mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Trenbolone',
            'description' => 'A potent anabolic steroid known for significant muscle gains, strength, and fat loss.',
            'price' => '120.00€',
            'round_desc' => 'A potent anabolic steroid known for significant muscle gains, strength, and fat loss.',
            'caliber' => 'Trenbolone Acetate (Finaplix)',
            'mass' => '200 mL',
            'explosive_type' => '10 mL vials',
            'explosive_mass' => 'Unflavored (injectable)',
            'tnt' => 'Injectable',
            'fuze' => '1 m',
            'pen' => '20mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Winstrol',
            'description' => 'An anabolic steroid used for muscle preservation, strength, and cutting cycles.',
            'price' => '100.00€',
            'round_desc' => 'An anabolic steroid used for muscle preservation, strength, and cutting cycles.',
            'caliber' => 'Winstrol',
            'mass' => '10 mg',
            'explosive_type' => '100 tablets',
            'explosive_mass' => 'Unflavored (oral tablet)',
            'tnt' => 'Oral tablet',
            'fuze' => '1 mm',
            'pen' => '150mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Anavar',
            'description' => 'An oral anabolic steroid known for promoting lean muscle mass, strength, and fat loss.',
            'price' => '150.00€',
            'round_desc' => 'An oral anabolic steroid known for promoting lean muscle mass, strength, and fat loss.',
            'caliber' => 'Anavar',
            'mass' => '10 mg',
            'explosive_type' => '100 tablets',
            'explosive_mass' => 'Unflavored (oral tablet)',
            'tnt' => 'Oral tablet',
            'fuze' => '50 mm',
            'pen' => '650mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Primobolan',
            'description' => 'A mild anabolic steroid used for lean muscle gains and cutting cycles.',
            'price' => '200.00€',
            'round_desc' => 'A mild anabolic steroid used for lean muscle gains and cutting cycles.',
            'caliber' => 'Primobolan Depot',
            'mass' => '100 mL',
            'explosive_type' => '1 mL ampoules',
            'explosive_mass' => 'Unflavored (injectable)',
            'tnt' => 'Injectable',
            'fuze' => '0.01 mm',
            'pen' => '433mm',
        ]);

        \App\Models\Item::factory()->create([
            'name' => 'Equipoise',
            'description' => 'An injectable anabolic steroid used for increasing muscle mass and appetite.',
            'price' => '120.00€',
            'round_desc' => 'An injectable anabolic steroid used for increasing muscle mass and appetite.',
            'caliber' => 'Equipoise',
            'mass' => '200 mL',
            'explosive_type' => '10 mL vials',
            'explosive_mass' => 'Unflavored (injectable)',
            'tnt' => 'Injectable',
            'fuze' => '',
            'pen' => '629mm',
        ]);
    }
}
