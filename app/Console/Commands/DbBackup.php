<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

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
        if (! Storage::exists('backup')) {
            Storage::makeDirectory('backup');
        }

        // $filenameSql = 'backup-' . Carbon::now()->format('Y-m-d') . '.sql';
        // $filenameGz = 'backup-' . Carbon::now()->format('Y-m-d') . '.gz';
        // $commandSql = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE') . '  | gzip > ' . storage_path() . '/app/backup/' . $filenameSql;
        // $commandGz = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE') . '  | gzip > ' . storage_path() . '/app/backup/' . $filenameGz;
        // $returnVar = null;
        // $output = null;
        // exec($commandSql, $output, $returnVar);
        // exec($commandGz, $output, $returnVar);
        // $this->info('The database backup is successfully');

        // Get database credentials from the .env file
        $dbHost = config('database.connections.mysql.host');
        $dbPort = config('database.connections.mysql.port');
        $dbName = config('database.connections.mysql.database');
        $dbUser = config('database.connections.mysql.username');
        $dbPass = config('database.connections.mysql.password');

        // Define the backup file name and path
        $backupFile = storage_path('app/backup/' . $dbName . '_backup_' . date('Y_m_d_H_i_s') . '.sql');

        // Ensure the backups directory exists
        if (! Storage::exists('backup')) {
            Storage::makeDirectory('backup');
        }

        // Build the mysqldump command
        $command = sprintf(
            'mysqldump --host=%s --port=%s --user=%s --password=%s %s > %s',
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
    }
}
