<?php

namespace App\Console\Commands;

use App\Http\Repositories\AdminRepository;
use Illuminate\Console\Command;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $data = [
            'name' => 'John Doe Admin',
            'email' => 'johndoeadmin@mail.com',
            'password' => 'password',
        ];

        (new AdminRepository)->create($data);

        return self::SUCCESS;
    }
}
