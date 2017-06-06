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

class NFO extends AbstractApi
{
    public function scene($id)
    {
        $this->setQuery(compact('id'));

        $response = $this->get('nfo/release');

        return $this->hydrateOne($response);
    }

    public function p2p($id)
    {
        $this->setQuery(compact('id'));

        $response = $this->get('nfo/p2p_rls');

        return $this->hydrateOne($response);
    }
}
