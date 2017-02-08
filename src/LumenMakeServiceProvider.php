<?php

namespace SMSkin\LumenMake;

use Illuminate\Support\ServiceProvider;
use SMSkin\LumenMake\Commands\JobMakeCommand;
use SMSkin\LumenMake\Commands\ConsoleMakeCommand;
use SMSkin\LumenMake\Commands\ControllerMakeCommand;
use SMSkin\LumenMake\Commands\ModelMakeCommand;
use SMSkin\LumenMake\Commands\MiddlewareMakeCommand;
use SMSkin\LumenMake\Commands\ExceptionMakeCommand;
use SMSkin\LumenMake\Commands\RequestMakeCommand;

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
