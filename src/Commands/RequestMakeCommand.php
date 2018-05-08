<?php
declare(strict_types=1);

namespace Groovili\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * Class RequestMakeCommand
 * @package Groovili\LumenMake\Commands
 */
class RequestMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:request';

    /**
     * @var string
     */
    protected $description = 'Make a new request.';

    /**
     * @var string
     */
    protected $type = 'Request';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/request.stub';
    }

    /**
     * @param $namespace
     * @return string
     */
    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Http\Requests';
    }
}