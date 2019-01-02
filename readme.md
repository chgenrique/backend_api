# backend_api
Backend api using Laravel



# For Migrations:

As outlined in the Migrations guide to fix this all you have to do is edit your AppServiceProvider.php file and inside the boot method set a default string length:


use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}

#Auth

Using Passport authentication based on token

More in:
https://laravelcode.com/post/laravel-passport-create-rest-api-with-authentication