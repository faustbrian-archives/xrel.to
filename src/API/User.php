<?php

declare(strict_types=1);

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\xREL\API;

use Plients\Http\HttpResponse;

class User extends AbstractAPI
{
    /**
     * Returns information about the active user.
     *
     * @return \Plients\Http\HttpResponse
     */
    public function info(): HttpResponse
    {
        return $this->client->get('user/info.json');
    }
}
