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

class Product extends AbstractApi
{
    public function upcoming()
    {
        $response = $this->get('calendar/upcoming');

        return $this->hydrateOne($response);
    }

    public function info($id)
    {
        if ($this->authenticate) {
            $this->setOption('auth', 'oauth');
        }

        $this->setQuery((strpos($id, '.') ? ['dirname' => $id] : ['id' => $id]));

        $response = $this->get('ext_info/info');

        return $this->hydrateOne($response);
    }

    public function media($id)
    {
        $this->setQuery((strpos($id, '.') ? ['dirname' => $id] : ['id' => $id]));

        $response = $this->get('ext_info/media');

        return $this->hydrateOne($response);
    }

    public function rate($id, $rating)
    {
        $params = (strpos($id, '.') ? ['dirname' => $id] : ['id' => $id]);
        $params['rating'] = $rating;

        $this->setQuery($params);

        $response = $this->post('ext_info/rate');

        return $this->hydrateOne($response);
    }
}
