<?php

declare(strict_types=1);

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\xREL\API;

use BrianFaust\Http\HttpResponse;

class User extends AbstractAPI
{
    /**
     * Returns information about the active user.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function info(): HttpResponse
    {
        return $this->client->get('user/info.json');
    }
}
