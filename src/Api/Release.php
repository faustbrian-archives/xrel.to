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

class Release extends AbstractApi
{
    public function info($id)
    {
        $this->setQuery((strpos($id, '.') ? ['dirname' => $id] : ['id' => $id]));

        $response = $this->post('release/info');

        return $this->hydrateOne($response);
    }

    public function latest($archive = null, $per_page = 25, $page = 1, $filter = 0)
    {
        if ($this->authenticate) {
            $this->setOption('auth', 'oauth');
        }

        $this->setQuery(compact('archive', 'per_page', 'page', 'filter'));

        $response = $this->get('release/latest');

        return $this->hydrateOne($response);
    }

    public function categories()
    {
        $response = $this->get('release/categories');

        return $this->hydrateOne($response);
    }

    public function browseCategory($ext_info_type, $category_name = 'TOPMOVIE')
    {
        $this->setQuery(compact('ext_info_type', 'category_name'));

        $response = $this->get('release/browse_category');

        return $this->hydrateOne($response);
    }

    public function productReleases($id, $per_page = 25, $page = 1)
    {
        $this->setQuery(compact('id', 'per_page', 'page'));

        $response = $this->get('release/ext_info');

        return $this->hydrateOne($response);
    }

    public function filters()
    {
        $response = $this->get('release/filters');

        return $this->hydrateOne($response);
    }

    public function addProof($id, $image)
    {
        $this->setFormParameters(compact('id', 'image'));

        $response = $this->post('release/addproof');

        return $this->hydrateOne($response);
    }
}
