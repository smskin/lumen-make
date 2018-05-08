<?php
declare(strict_types=1);

namespace Groovili\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * Class EventMakeCommand
 * @package Groovili\LumenMake\Commands
 */
class EventMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:event';

    /**
     * @var string
     */
    protected $description = 'Make a new Event class.';

    protected $type = 'Event';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/event.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Events';
    }
}
