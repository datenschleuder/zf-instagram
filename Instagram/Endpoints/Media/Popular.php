<?php

/**
 * ZF-Instagram - Endpoint Popular
 * 
 * Get a list of what media is most popular at the moment. 
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/media/#get_media_popular
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Media_Popular implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    /**
     * return GET-Parameter
     *
     * (non-PHPdoc)
     *
     * @see ZendX_Instagram_Interfaces_Endpoint::getData()
     * @return array
     */
    public function getData ()
    {
        return array();
    }

    /**
     * return url params
     *
     * (non-PHPdoc)
     *
     * @see ZendX_Instagram_Interfaces_Endpoint::getUrl()
     * @return array
     */
    public function getUrl ()
    {
        return array(
                'endpointurl' => '/v1/media/popular/',
                'method' => 'get'
        );
    }
} 