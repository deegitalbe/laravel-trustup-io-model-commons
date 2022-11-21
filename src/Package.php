<?php
namespace Deegitalbe\LaravelTrustupIoModelCommons;

use Deegitalbe\LaravelTrustupIoModelCommons\Contracts\PackageContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class Package extends VersionablePackage implements PackageContract
{
    public static function prefix(): string
    {
        return "laravel-trustup-io-model-commons";
    }
}