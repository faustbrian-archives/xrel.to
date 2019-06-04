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

class Favorites extends AbstractAPI
{
    /**
     * Returns a list of all the current user's favorite lists.
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists(): HttpResponse
    {
        return $this->client->get('favs/lists');
    }

    /**
     * Returns entries of a favorite list.
     *
     * @param string $id
     * @param bool   $get_releases
     *
     * @return \Plients\Http\HttpResponse
     */
    public function entries(string $id, bool $get_releases = false): HttpResponse
    {
        $lists = $this->lists();
        foreach ($lists as $list) {
            if ($list['id'] === $id) {
                return $this->client->post('favs/list_entries.json', compact('id', 'get_releases'));
            }
        }

        return false;
    }

    /**
     * Add an Ext Info to a favorite list.
     *
     * @param string $id
     * @param string $ext_info_id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function add(string $id, string $ext_info_id): HttpResponse
    {
        return $this->client->post('favs/list_addentry.json', compact('id', 'ext_info_id'));
    }

    /**
     * Removes an Ext Info from a favorite list.
     *
     * @param string $id
     * @param string $ext_info_id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function delete(string $id, string $ext_info_id): HttpResponse
    {
        return $this->client->post('favs/list_delentry.json', compact('id', 'ext_info_id'));
    }

    /**
     * Mark a release on a favorite list as read.
     *
     * @param string $id
     * @param string $release_id
     * @param string $type
     *
     * @return \Plients\Http\HttpResponse
     */
    public function mark(string $id, string $release_id, string $type): HttpResponse
    {
        return $this->client->post('favs/list_markread.json', compact('id', 'release_id', 'type'));
    }
}
