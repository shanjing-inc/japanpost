<?php

declare(strict_types=1);

namespace Shanjing\Japanpost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Shanjing\Japanpost\Token token()
 * @method static \Shanjing\Japanpost\AddressZip addressZip()
 * @method static \Shanjing\Japanpost\SearchCode searchCode()
 */
class Japanpost extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'japanpost';
    }
}
