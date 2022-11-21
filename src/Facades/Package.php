<?php
namespace Deegitalbe\LaravelTrustupIoModelCommons\Facades;

use Deegitalbe\LaravelTrustupIoModelCommons\Package as Underlying;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class Package extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return Underlying::class;
    }
}