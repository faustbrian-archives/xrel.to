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

class Product extends AbstractAPI
{
    /**
     * Returns a list upcoming movies and their releases.
     *
     * @param string $country
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function upcoming(string $country = 'de'): HttpResponse
    {
        return $this->client->get('calendar/upcoming.json', compact('country'));
    }

    /**
     * Returns information about an Ext Info.
     *
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function info(string $id): HttpResponse
    {
        return $this->client->get('ext_info/info.json', $this->getId($id));
    }

    /**
     * Returns media associated with an Ext Info.
     *
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function media(string $id): HttpResponse
    {
        return $this->client->get('ext_info/media.json', $this->getId($id));
    }

    /**
     * Rate an Ext Info.
     *
     * @param string $id
     * @param [type] $rating
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function rate(string $id, int $rating): HttpResponse
    {
        return $this->client->post('ext_info/rate.json', $this->getId($id) + compact('rating'));
    }
}
