<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Clean seeder — creates ONLY the Super Admin account.
 * No sample departments, designations, users, files or movements.
 * Run: php artisan db:seed
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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