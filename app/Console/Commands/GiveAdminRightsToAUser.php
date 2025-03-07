<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GiveAdminRightsToAUser extends Command
{
    protected $signature = 'app:give-admin-rights-to-a-user {email}';

    protected $description = 'Set the is_admin flag for a user';


    public function handle()
    {
        $email = $this->argument('email');

        $user = User::where('email', $email)->first();

        $user->update([
            'is_admin' => true,
        ]);

        $this->info('Just promoted '.$email.' to admin.');
    }
}
