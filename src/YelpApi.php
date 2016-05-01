<?php
namespace RubenArakelyan\YelpApi;

/**
 * Class YelpApi
 * @package RubenArakelyan\YelpApi
 */
class YelpApi extends \Stevenmaguire\Yelp\Client
{
    /**
     * Build query string params using defaults
     *
     * @param array $attributes
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
}
