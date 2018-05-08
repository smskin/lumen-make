# lumen-make
A package built for Lumen that ports most of the make commands from Laravel.

**At the moment package compatible only with Lumen >= 5.6.**

#Info
This package based on michaelb/lumen-make and smskin/lumen-make libraries.

## Installation

Just run the following in the root of your project
```shell
> composer require groovili/lumen-make
```

Uncomment line in bootstrap/app.php
```php
$app->register(App\Providers\EventServiceProvider::class);
```

Add line to bootstrap/app.php for enable generators
```php
// enable generator permanently
$app->register(Groovili\LumenMake\LumenMakeServiceProvider::class);

// enable generator in development mode
if (env('APP_ENV') !== 'production' || env('APP_ENV') === 'local') {
    $app->register(Groovili\LumenMake\LumenMakeServiceProvider::class);
}
```

Add line to bootstrap/app.php to enable form requests
```php
$app->register(Groovili\LumenMake\Providers\FormRequestServiceProvider::class);
```

## Requests info
In generated requests Groovili\LumenMake\Requests is used. If you want migrate to Laravel framework, change use line in all generated requests
```php
use Groovili\LumenMake\Requests\FormRequest; 
\\to
use Illuminate\Foundation\Http\FormRequest;
```
#### Commands
* `make:job {name}` - Makes a new job class in Jobs/
* `make:console {name}` - Makes a new console command in Console/Commands/
* `make:controller {name}` - Makes a new restful controller in Http/Controllers/
* `make:model {name}` - Makes a new model in /
* `make:middleware {name}` - Makes a new middleware class in Http/Middleware/
* `make:exception {name}` - Makes a new exception class in Exceptions/
* `make:event {name}` - Makes a new event class in Events/
* `make:request {name}` - Makes a new request class in Http/Requests/
