<?php

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\xREL\Http\Handlers;

use BrianFaust\Http\Handlers\OAuth2 as AbstractHandler;

class OAuth2 extends AbstractHandler
{
    protected function getAuthorizeUrl()
    {
        return 'https://api.xrel.to/v2/oauth2/auth';
    }

    protected function getAccessTokenUrl()
    {
        return 'https://api.xrel.to/v2/oauth2/token';
    }

    protected function getResourceOwnerDetailsUrl()
    {
        return 'https://api.xrel.to/v2/user/info.json';
    }
}
