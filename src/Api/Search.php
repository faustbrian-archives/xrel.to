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

class Search extends AbstractApi
{
    public function releases($q, $limit = 25, $scene = true, $p2p = false)
    {
        $this->setQuery(compact('q', 'limit', 'scene', 'p2p'));

        $response = $this->get('search/releases');

        return $this->hydrateOne($response);
    }

    public function extInfo($q, $type, $limit = 25)
    {
        $this->setQuery(compact('q', 'type', 'limit'));

        $response = $this->get('search/ext_info');

        return $this->hydrateOne($response);
    }
}
