<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;

class MakeViewModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view-model {name : The name of the ViewModel, including its namespace}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ViewModel file in a specific namespace.';

    protected $itemName = 'ViewModel';

    public function __construct(protected Filesystem $files)
    {
        parent::__construct();
    }

    /**
     * @throws FileNotFoundException
     */
    public function handle(): void
    {
        // Inicialmente, el NAME incluye, tanto el Namespace propio del ViewModel, como su nombre.
        $name = $this->argument('name');

        // Separando el NAMESPACE del NAME del ViewModel
        $parts = explode('\\', $name);
        $class = array_pop($parts);

        // Juntando el Namespace base con el propio definido por el usuario
        // $namespace = count($parts) === 0
        //     ? 'App\\' . $this->itemName . 's'
        //     : 'App\\' . $this->itemName . 's\\' . implode('\\', $parts);
        // o
        $namespace = 'App\\' . $this->itemName . 's' . (!empty($parts) ? '\\' . implode('\\', $parts) : '');

        // Generando la ruta del archivo, simplemente, el directorio dentro de la ruta general
        $path = app_path($this->itemName . 's/' . implode('/', $parts) . '/' . $class . '.php');

        // Verificando si ya existe
        if ($this->files->exists($path)) {
            // $this->error($this->itemName . ' already exists');
            // return false;
            $this->fail($this->itemName . ' already exists');
        }

        $this->makeDirectory($path);
        $stub = $this->getStub();
        $stub = str_replace(
            ['{{ namespace }}', '{{ class }}'],
            [$namespace, $class],
            $stub
        );

        // Generando el archivo
        $this->files->put($path, $stub);

        $this->info($this->itemName . ' created successfully.');
        // return true;
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
        return $this->files->get(base_path('stubs/view-model.stub'));
    }
}
