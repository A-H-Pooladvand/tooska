<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 1/22/2018
 * Time: 9:59 PM
 */

namespace App\Http\Controllers\_Controller\Grid;


use Illuminate\Http\Request;

class Filter
{
    /**
     * Indicates the field, operator and value of requested row of search
     *
     * @var array
     */
    protected $filter;

    /**
     * @param \Illuminate\Http\Request
     * @param array $query
     * @return array
     */
    protected function filter(Request $request, $query)
    {
        $this->filter = json_decode($request['filterRules'], true);

        if (!$request->has('filterRules'))
            return $query;

        foreach ($this->filter as $item) {
            return $query->where($item['field'], 'LIKE', "%{$item['value']}%");
        }
    }
}