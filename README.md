# Ping for Laravel

This Laravel package is simple and unopinionated. It simply returns the HTTP Status Code for a provided URL.

## Installation

Install via Composer:
```bash
composer require koduarve/laravel-ping
```
You'll need to register the ServiceProvider and Facade:
```php
// config/app.php

'providers' => [
    // ...
    Koduarve\Ping\PingServiceProvider::class,
];

'aliases' => [
    // ...
    'Ping' => Koduarve\Ping\Facades\Ping::class,
];
```

## Usage

```php
<?php

namespace App\Http\Controllers;

use Ping;
use App\Http\Controllers\Controller;

class HealthServerController extends Controller
{
    /**
     * Show the current health of a given URL.
     *
     * @param  string  $url
     * @return string
     */
    public function healthCheck($url)
    {
        $health = Ping::check($url);

        if($health == 200) {
            return 'Alive!';
        } else {
            return 'Dead :(';
        }
    }
}
```

## Credits

- [KODUARVE OU](https://github.com/koduarve) - Author

## License

The MIT License (MIT). Please see [License File](https://github.com/koduarve/laravel-ping/blob/master/LICENSE.md) for more information.