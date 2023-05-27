<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info("Cron is working fine!");
        // echo 'C:\Divya\javascript';
        // $data['output']['init'] = shell_exec('git init');
        // $data['output']['status'] = shell_exec('git add README.md');
        // $data['output']['add'] = shell_exec('git commit -m "first commit"');
        // $data['output']['add'] = shell_exec('git branch -M main');
        // $data['output']['add'] = shell_exec('git remote add origin https://github.com/Divya-Bagul/autogitlaravel.git');
        // $data['output']['add'] = shell_exec('git push -u origin main');
        $data['status'] = shell_exec('git status');
        $data['add'] = shell_exec('git add --all');
        $data['add'] = shell_exec('git commit -m "update changes');
        $data['push'] = shell_exec('git pull origin main');
        // echo ($data);

        print_r($data);

// debug
// dd( $data );
        // return Command::SUCCESS;
    }
}
