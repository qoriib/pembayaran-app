<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SetupApp extends Command
{
    protected $signature = 'app:setup';
    protected $description = 'Migrate fresh, seed, and create Filament user from .env';

    public function handle(): void
    {
        $this->call('migrate:fresh', ['--seed' => true]);

        $email = env('ADMIN_EMAIL', 'admin@example.com');
        $password = env('ADMIN_PASSWORD', 'secret123');

        if (!User::where('email', $email)->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => $email,
                'password' => Hash::make($password),
            ]);

            $this->info("Admin user created: $email / $password");
        } else {
            $this->warn("Admin user already exists.");
        }
    }
}
