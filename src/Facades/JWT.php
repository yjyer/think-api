<?php
namespace Zewail\Api\Facades;

use think\Facade;

/**
 * @author   Chan Zewail <chanzewail@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/czewail/think-api
 */
class JWT extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Zewail\Api\JWT\Factory';
    }
}