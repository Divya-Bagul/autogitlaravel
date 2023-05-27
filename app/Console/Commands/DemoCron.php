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
        
       
        // $data['output']['init'] = shell_exec('git init');
        // $data['output']['status'] = shell_exec('git add README.md');
        // $data['output']['add'] = shell_exec('git commit -m "first commit"');
        // $data['output']['add'] = shell_exec('git branch -M main');
        // $data['output']['add'] = shell_exec('git remote add origin https://github.com/Divya-Bagul/autogitlaravel.git');
        // $data['output']['add'] = shell_exec('git push -u origin main');
        $data['status'] = shell_exec('git status');
        $data['add'] = shell_exec('git add --all');
        $data['commit'] = shell_exec('git commit -m "update changes by divya');
        $data['pull'] = shell_exec('git pull origin main');
        $data['push'] = shell_exec('git push origin main');
        print_r($data);


       
    }
}
