<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\GenerateFileRepository;

class AutoGenerateFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:AutoGenerateFile {fileName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto generate the controller and repository.';

    protected $generateFileRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(GenerateFileRepository $generateFileRepository)
    {
        parent::__construct();
        $this->generateFileRepository = $generateFileRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fileName = $this->argument('fileName');
        $this->generateFileRepository->generateControllerAndRepository($fileName);
    }
}
