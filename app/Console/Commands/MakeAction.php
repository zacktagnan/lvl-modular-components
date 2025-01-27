<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;

class MakeAction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:action {name : The name of the Action, including its namespace}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Action file in a specific namespace.';

    protected $itemName = 'Action';

    public function __construct(protected Filesystem $files)
    {
        parent::__construct();
    }

    /**
     * @throws FileNotFoundException
     */
    public function handle()
    {
        $name = $this->argument('name');

        $parts = explode('\\', $name);
        $class = array_pop($parts);

        $namespace = 'App\\' . $this->itemName . 's' . (!empty($parts) ? '\\' . implode('\\', $parts) : '');

        $path = app_path($this->itemName . 's/' . implode('/', $parts) . '/' . $class . '.php');

        if ($this->files->exists($path)) {
            $this->error($this->itemName . ' already exists');
            return false;
        }

        $this->makeDirectory($path);
        $stub = $this->getStub();
        $stub = str_replace(
            ['{{ namespace }}', '{{ class }}'],
            [$namespace, $class],
            $stub
        );

        $this->files->put($path, $stub);

        $this->info($this->itemName . ' created successfully.');

        return true;
    }

    protected function makeDirectory($path): void
    {
        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0755, true);
        }
    }

    /**
     * @throws FileNotFoundException
     */
    public function getStub(): string
    {
        return $this->files->get(base_path('stubs/action.stub'));
    }
}
