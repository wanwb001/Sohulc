<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sohulc:test_logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '日志测试功能';

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
     * @return mixed
     */
    public function handle()
    {
        //
        // API 请求返回的结果
        $data = [
            ['first_name' => 'John', 'last_name' => 'Doe', 'age' => 'twenties'],
            ['first_name' => 'Fred', 'last_name' => 'Ali', 'age' => 'thirties'],
            ['first_name' => 'Alex', 'last_name' => 'Cho', 'age' => 'thirties'],
        ];
        \Log::debug("测试日志",$data);

    }
}
