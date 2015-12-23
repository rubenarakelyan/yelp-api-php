<?php namespace RubenArakelyan\YelpApi;

// **********************************************************************
// Yelp API PHP wrapper
// Version 1.0.0
// Author: Ruben Arakelyan <ruben@ra.me.uk>
//
// Copyright (C) 2015 Ruben Arakelyan.
// This file is licensed under the MIT licence.
//
// For more information, see https://github.com/rubenarakelyan/yelp-api-php
// **********************************************************************

/**
 * Class YelpApi
 * @package YelpApi
 */
class YelpApi extends Stevenmaguire\Yelp\Client
{
    /**
     * Build query string params using defaults
     *
     * @param  array $attributes
     *
     * @return string
     */
    public function buildQueryParams($attributes = [])
    {
        $defaults = [
            'limit' => $this->searchLimit
        ];
        
        $attributes = array_merge($defaults, $attributes);
        
        return http_build_query($attributes);
    }
    
    /**
     * Query the Search API by a search term and location
     *
     * @param    array    $attributes   Query attributes
     *
     * @return   stdClass               The JSON response from the request
     */
    public function search($attributes = [])
    {
        $query_string = $this->buildQueryParams($attributes);
        $searchPath = $this->searchPath . "?" . $query_string;
        
        return $this->request($searchPath);
    }
}

?>