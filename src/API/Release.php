<?php

declare(strict_types=1);

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

class Release extends AbstractAPI
{
    /**
     * Returns information about a single release.
     *
     * @param string $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function info(string $id): HttpResponse
    {
        return $this->client->post('release/info.json', $this->getId($id));
    }

    /**
     * Returns the latest releases. Also allows to browse the archive by month.
     *
     * @param string $archive
     * @param int    $page
     * @param int    $filter
     * @param int    $per_page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function latest(string $archive = null, int $page = 1, int $filter = 0, int $per_page = 25): HttpResponse
    {
        return $this->client->get('release/latest.json', compact('archive', 'per_page', 'page', 'filter'));
    }

    /**
     * Returns a list of available release categories.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function categories(): HttpResponse
    {
        return $this->client->get('release/categories.json');
    }

    /**
     * Returns scene releases from the given category.
     *
     * @param string $ext_info_type
     * @param string $category_name
     * @param int    $per_page
     * @param int    $page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function browseCategory(string $ext_info_type, string $category_name = 'TOPMOVIE', int $page = 1, int $per_page = 25): HttpResponse
    {
        return $this->client->get('release/browse_category.json', compact('ext_info_type', 'category_name', 'page', 'per_page'));
    }

    /**
     * Returns all releases associated with a given Ext Info.
     *
     * @param string $id
     * @param int    $per_page
     * @param int    $page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function productReleases(string $id, int $page = 1, int $per_page = 25): HttpResponse
    {
        return $this->client->get('release/ext_info.json', compact('id', 'per_page', 'page'));
    }

    /**
     * Returns a list of public, predefined release filters. You can use the filter ID in release/latest.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function filters(): HttpResponse
    {
        return $this->client->get('release/filters.json');
    }

    /**
     * Adds a proof picture to a given API release id. More info on proof pictures can be found here.
     *
     * @param string $id
     * @param string $image
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function addProof(string $id, string $image): HttpResponse
    {
        return $this->client->post('release/addproof.json', compact('id', 'image'));
    }
}
