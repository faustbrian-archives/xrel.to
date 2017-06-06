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

class P2P extends AbstractApi
{
    public function releases($ext_info_id = null, $category_id = null, $group_id = null, $per_page = 25, $page = 1)
    {
        $this->setQuery(compact('per_page', 'page', 'category_id', 'group_id', 'ext_info_id'));

        $response = $this->get('p2p/releases');

        return $this->hydrateOne($response);
    }

    public function categories()
    {
        $response = $this->get('p2p/categories');

        return $this->hydrateOne($response);
    }

    public function release($dirname)
    {
        $this->setQuery(compact('dirname'));

        $response = $this->get('p2p/rls_info');

        return $this->hydrateOne($response);
    }
}
