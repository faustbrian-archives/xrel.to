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

class Search extends AbstractAPI
{
    /**
     * Searches for Ext Infos.
     *
     * @param string $q
     * @param int    $limit
     * @param bool   $scene
     * @param bool   $p2p
     *
     * @return \Plients\Http\HttpResponse
     */
    public function releases(string $q, int $limit = 25, bool $scene = true, bool $p2p = false): HttpResponse
    {
        return $this->client->get('search/releases.json', compact('q', 'limit', 'scene', 'p2p'));
    }

    /**
     * Searches for Scene and P2P releases.
     *
     * @param string $q
     * @param string $type
     * @param int    $limit
     *
     * @return \Plients\Http\HttpResponse
     */
    public function extInfo(string $q, string $type, int $limit = 25): HttpResponse
    {
        return $this->client->get('search/ext_info.json', compact('q', 'type', 'limit'));
    }
}
