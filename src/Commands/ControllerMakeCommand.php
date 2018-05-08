<?php
declare(strict_types=1);

namespace Groovili\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * Class ControllerMakeCommand
 * @package Groovili\LumenMake\Commands
 */
class ControllerMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:controller';

    /**
     * @var string
     */
    protected $description = 'Make a new http controller.';

    protected $type = 'Controller';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/controller.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Http\Controllers';
    }
}
