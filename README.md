# Laravel 5 Wrapper for the Zoom API

## Installation

### Step 1: Composer

From the command line, run:

```
composer require oversee/zoom
```

### Step 2: Service Provider (For Laravel < 5.5)

For your Laravel app, open `config/app.php` and, within the `providers` array, append:

```
Oversee\Zoom\ZoomServiceProvider::class
```

### Step 3: Publish Configs

First from the command line, run:

```
php artisan vendor:publish --provider="Oversee\Zoom\ZoomServiceProvider"
```

After that you will see `zoom.php` file in config directory, where you add value for api_key and api_secret

### Usage

```
$zoom = new Zoom();

$zoom->users->list()
```

### RESOURCES
```
Users
Meetings
```