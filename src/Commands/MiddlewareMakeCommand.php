<?php
declare(strict_types=1);

namespace Groovili\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * Class MiddlewareMakeCommand
 * @package Groovili\LumenMake\Commands
 */
class MiddlewareMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:middleware';

    /**
     * @var string
     */
    protected $description = 'Make a new Middleware Class.';

    protected $type = 'Middleware';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/middleware.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Http\Middleware';
    }
}
