<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make backup kids station form database';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $dbHost = env('DB_HOST');
        $dbPort = env('DB_PORT');
        $dbName = env('DB_DATABASE');
        $dbUser = env('DB_USERNAME');
        $dbPass = env('DB_PASSWORD');

        $backupPath = storage_path('app/backup');
        if (!is_dir($backupPath)) {
            mkdir($backupPath, 0777, true);
        }

        // Define the backup file name and path
        $backupFile = $backupPath . '/' . $dbName . '_' . date('Y-m-d_H-i-s') . '.sql';

        // Build the mysqldump command
        $command = sprintf(
            "mysqldump --host=%s --port=%s --user=%s --password=%s %s > %s",
            escapeshellarg($dbHost),
            escapeshellarg($dbPort),
            escapeshellarg($dbUser),
            escapeshellarg($dbPass),
            escapeshellarg($dbName),
            escapeshellarg($backupFile)
        );

        // Execute the command
        $result = null;
        system($command, $result);

        // Check the result and provide feedback
        if ($result === 0) {
            $this->info("Database backup successfully created at: $backupFile");
        } else {
            $this->error("Failed to create database backup. Please check your configuration.");
        }

        return $result;
    }
}
