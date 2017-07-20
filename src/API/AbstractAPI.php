<?php

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\xREL\API;

use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    /**
     * Determine if we are using an id or a dirname.
     *
     * @param string $id
     *
     * @return array
     */
    protected function getId(string $id): array
    {
        return strpos($id, '.') ? ['dirname' => $id] : ['id' => $id];
    }
}
