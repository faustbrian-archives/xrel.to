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

class P2P extends AbstractAPI
{
    /**
     * Browse P2P/non-scene releases.
     *
     * @param string $ext_info_id
     * @param string $category_id
     * @param string $group_id
     * @param int    $page
     * @param int    $per_page
     *
     * @return \Plients\Http\HttpResponse
     */
    public function releases(string $ext_info_id = null, string $category_id = null, string $group_id = null, int $page = 1, int $per_page = 25): HttpResponse
    {
        return $this->client->get('p2p/releases.json', compact('per_page', 'page', 'category_id', 'group_id', 'ext_info_id'));
    }

    /**
     * Returns a list of available P2P release categories and their IDs.
     *
     * @return \Plients\Http\HttpResponse
     */
    public function categories(): HttpResponse
    {
        return $this->client->get('p2p/categories.json');
    }

    /**
     * Returns information about a single P2P/non-scene release.
     *
     * @param string $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function release(string $id): HttpResponse
    {
        return $this->client->get('p2p/rls_info.json', $this->getId($id));
    }
}
