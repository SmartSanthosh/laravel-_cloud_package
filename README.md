This is laravel could package

install yajara datable

Then install the Yajra DataTable plugin in Laravel
```
composer require yajra/laravel-datatables-oracle
```
Go to config/app.php file and paste this inside:

```
.....
.....
'providers' => [
    ....
    ....
    Yajra\DataTables\DataTablesServiceProvider::class,
]
'aliases' => [
    ....
    ....
    'DataTables' => Yajra\DataTables\Facades\DataTables::class,
]
.....
.....
```

Run vendor publish command
```
php artisan vendor:publish --provider="Yajra\DataTables\DataTablesServiceProvider"

```