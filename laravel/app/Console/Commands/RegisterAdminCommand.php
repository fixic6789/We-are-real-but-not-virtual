<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:make_admin {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = [
            'name' => 'Admin',
            'email' => $email,
            'password' => Hash::make($password)
        ];

        User::create($user);
    }

}
