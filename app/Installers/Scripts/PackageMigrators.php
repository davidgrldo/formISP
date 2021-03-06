<?php

namespace App\Installers\Scripts;

use Illuminate\Console\Command;
use App\Installers\SetupScript;

class PackageMigrators implements SetupScript
{
    /**
     * Fire the install script.
     *
     * @param Command $command
     *
     * @return mixed
     */
    public function fire(Command $command)
    {
        if ($command->option('verbose')) {
            $command->blockMessage('Migrations', 'Starting the package migrations ...', 'comment');
        }

        $command->call('migrate:refresh', ['--force' => true]);
    }
}
