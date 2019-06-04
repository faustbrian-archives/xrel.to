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

class NFO extends AbstractAPI
{
    /**
     * Returns an image of a NFO file for a given API release id.
     *
     * @param string $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function scene(string $id): HttpResponse
    {
        return $this->client->get('nfo/release.json', compact('id'));
    }

    /**
     * Returns an image of a NFO file for a given API P2P release id.
     *
     * @param string $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function p2p(string $id): HttpResponse
    {
        return $this->client->get('nfo/p2p_rls.json', compact('id'));
    }
}
