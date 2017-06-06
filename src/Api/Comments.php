<?php

/*
 * This file is part of xREL.to PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\xREL\Api;

use BrianFaust\Unified\AbstractApi;

class Comments extends AbstractApi
{
    public function get($id, $type, $per_page, $page)
    {
        $this->setQuery(compact('id', 'type', 'per_page', 'type'));

        $response = $this->get('comments/get');

        return $this->hydrateOne($response);
    }

    public function add($id, $type, $text, $video_rating = null, $audio_rating = null)
    {
        $this->setFormParameters(compact('id', 'type', 'text', 'video_rating', 'audio_rating'));

        $response = $this->post('comments/add');

        return $this->hydrateOne($response);
    }
}
