<?php

namespace App\Providers;

use App\DatabaseConnection;
use App\DatabaseConnectionInterface;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public $bindings = [
        DatabaseConnectionInterface::class => DatabaseConnection::class,
    ];
}
