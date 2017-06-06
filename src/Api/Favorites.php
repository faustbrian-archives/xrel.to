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

class Favorites extends AbstractApi
{
    public function lists()
    {
        $response = $this->get('favs/lists');

        return $this->hydrateOne($response);
    }

    public function listEntries($id, $get_releases = 0)
    {
        $lists = $this->lists();
        foreach ($lists as $list) {
            if ($list['id'] === $id) {
                $this->setFormParameters(compact('id', 'get_releases'));

                return $this->post('favs/list_entries');
            }
        }

        return false;
    }

    public function listAddentry($id, $ext_info_id)
    {
        $this->setFormParameters(compact('id', 'ext_info_id'));

        $response = $this->post('favs/list_addentry');

        return $this->hydrateOne($response);
    }

    public function listDelentry($id, $ext_info_id)
    {
        $this->setFormParameters(compact('id', 'ext_info_id'));

        $response = $this->post('favs/list_delentry');

        return $this->hydrateOne($response);
    }

    public function listMarkread($id, $release_id, $type)
    {
        $this->setFormParameters(compact('id', 'release_id', 'type'));

        $response = $this->post('favs/list_markread');

        return $this->hydrateOne($response);
    }
}
