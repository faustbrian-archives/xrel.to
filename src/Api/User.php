<?php

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\xREL\Api;

use BrianFaust\Unified\AbstractApi;

class User extends AbstractApi
{
    public function info()
    {
        $response = $this->get('user/info');

        return $this->hydrateOne($response);
    }
}
