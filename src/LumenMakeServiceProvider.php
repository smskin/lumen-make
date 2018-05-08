<?php
declare(strict_types=1);

namespace Groovili\LumenMake;

use Illuminate\Support\ServiceProvider;
use Groovili\LumenMake\Commands\JobMakeCommand;
use Groovili\LumenMake\Commands\ConsoleMakeCommand;
use Groovili\LumenMake\Commands\ControllerMakeCommand;
use Groovili\LumenMake\Commands\ModelMakeCommand;
use Groovili\LumenMake\Commands\MiddlewareMakeCommand;
use Groovili\LumenMake\Commands\ExceptionMakeCommand;
use Groovili\LumenMake\Commands\RequestMakeCommand;

/**
 * Class LumenMakeServiceProvider
 * @package Groovili\LumenMake
 */
class LumenMakeServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->commands(JobMakeCommand::class);
        $this->commands(ConsoleMakeCommand::class);
        $this->commands(ControllerMakeCommand::class);
        $this->commands(ModelMakeCommand::class);
        $this->commands(MiddlewareMakeCommand::class);
        $this->commands(RequestMakeCommand::class);
        $this->commands(ExceptionMakeCommand::class);
    }
}
