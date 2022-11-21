<?php
namespace Deegitalbe\LaravelTrustupIoModelCommons\Tests;

use Deegitalbe\LaravelTrustupIoModelCommons\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegitalbe\LaravelTrustupIoModelCommons\Providers\LaravelTrustupIoModelCommonsServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoModelCommonsServiceProvider::class
        ];
    }
}