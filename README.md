use Deegitalbe\LaravelTrustupIoModelCommons\Models\AbstractModel;
# laravel-trustup-io-model-commons

## Overview

This package han

## Installation

```shell
composer require deegitalbe/laravel-trustup-io-model-commons
```

### Configuration

Add fields to your migrations

```php
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my-models', function (Blueprint $table) {
            $table->uuid();
            $table->softDeletes();
        });
    }
```

Your models should look like this
```php
use Deegitalbe\LaravelTrustupIoModelCommons\Models\AbstractModel;

class MyModel extends AbstractModel
{
    // ...
}
```
You're good to go!