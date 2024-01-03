<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a repository';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modelName = $this->argument("model");

        $this->createFile($modelName);
    }

    public function createFile($modelName)
    {
        $repositoryPath = app_path("repositories/{$modelName}Repository.php");

        if (File::exists($repositoryPath)) {
            $this->error("{$modelName}Repository already exists!");
            return;
        } else if (!File::exists(app_path("Models/{$modelName}.php"))) {
            $this->error("{$modelName} doesn't exists!");
            return;
        }

        $content = "<?php

namespace App\Repositories;

use App\Models\\{$modelName};

class {$modelName}Repository extends Repository
{
    /**
     * Constructor
     * 
     * @return void
     **/
    public function __construct()
    {
        parent::__construct(new {$modelName});
    }
}

        ";

        file_put_contents($repositoryPath, $content);

        $this->info('Repository created successfully!');
    }
}
