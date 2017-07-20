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

use BrianFaust\Http\HttpResponse;

class Comments extends AbstractAPI
{
    /**
     * Returns comments for a given API release id or API P2P release id.
     *
     * @param string $id
     * @param string $type
     * @param int    $page
     * @param int    $per_page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function get(string $id, string $type, int $page = 1, int $per_page = 25): HttpResponse
    {
        return $this->client->get('comments/get.json', compact('id', 'type', 'per_page', 'type'));
    }

    /**
     * Add a comment to a given API release id or API P2P release id.
     *
     * @param string $id
     * @param string $type
     * @param string $text
     * @param int    $video_rating
     * @param int    $audio_rating
     */
    public function add(string $id, string $type, string $text, int $video_rating = null, int $audio_rating = null): HttpResponse
    {
        return $this->client->post('comments/add.json', compact('id', 'type', 'text', 'video_rating', 'audio_rating'));
    }
}
