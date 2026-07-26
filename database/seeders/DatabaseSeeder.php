<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('=== Super Admin Seeder ===');

        // Create only the Super Admin
        $this->call(SuperAdminSeeder::class);

        $this->command->info('');
        $this->command->info('=== Seeding Complete ===');
        $this->command->line('Super Admin: superadmin@filetrack.local / Admin@1234');
    }
}