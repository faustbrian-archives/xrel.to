<?php

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\xREL;

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://api.xrel.to/v2/',
        'headers' => [
           'User-Agent' => 'BrianFaust/xREL',
           'Accept' => 'application/json',
        ],
    ];

    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri.$path.'.json';
    }

    protected function getHandler()
    {
        return Http\Handlers\OAuth2::class;
    }
}
