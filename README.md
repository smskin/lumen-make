# lumen-make
A package built for lumen that ports most of the make commands from laravel.

#Info
This package based on michaelb/lumen-make (https://github.com/michaelbonds/lumen-make) library.
Added:
 * command for generate request (make:request) 
 * providers for work with requests.

## Installation

Just run the following in the root of your project
```shell
> composer require smskin/lumen-make
```

Uncomment line in bootstrap/app.php
```php
$app->register(App\Providers\EventServiceProvider::class);
```

Add line to bootstrap/app.php form enable generators
```php
//for enable generator permanently
$app->register(SMSkin\LumenMake\LumenMakeServiceProvider::class);
//for enable generator in development mode
if (env('APP_ENV') != 'production' || env('APP_ENV') == 'local') {
    $app->register(SMSkin\LumenMake\LumenMakeServiceProvider::class);
}
```

Add line to bootstrap/app.php for enable form requests
```php
$app->register(SMSkin\LumenMake\Providers\FormRequestServiceProvider::class);
```

## Requests info
In generated requests used FormRequest from this library. If you want migrate to Laravel framework, change use line in all generated requests
```php
use SMSkin\LumenMake\Requests\FormRequest; -> use Illuminate\Foundation\Http\FormRequest;
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
