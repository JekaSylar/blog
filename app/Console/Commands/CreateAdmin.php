<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a site administrator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $login = $this->ask('Login:', null);
        $name = $this->ask('Name:');
        $email =  $this->ask('Email:');
        $password = $this->secret('Password:');


        User::create([
            'login' => $login,
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'is_admin' => 1,
            'email_verified_at' => now(),
        ]);

        $this->info('Admin created successfully!');
    }
}
