<?php

/**
 * ZF-Instagram - Endpoint Media
 * 
 * Get recent media from a geography subscription that you created
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/geographies/#get_geographies_media_recent
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Geo_Media implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_geoid = NULL;

    private $_count = 10;

    private $_minid = NULL;

    /**
     * set min id
     *
     * @param int $minid            
     * @return ZendX_Instagram_Endpoints_Geo_Media
     */
    public function setMinId ($minid)
    {
        $this->_minid = (int) $minid;
        return $this;
    }

    /**
     * Max number of media to return.
     *
     * @param int $count            
     * @return ZendX_Instagram_Endpoints_Geo_Media
     */
    public function setCount ($count)
    {
        $this->_count = (int) $count;
        return $this;
    }

    /**
     * set geo id
     *
     * @param int $geoid            
     * @return ZendX_Instagram_Endpoints_Geo_Media
     */
    public function setGeoId ($geoid)
    {
        $this->_geoid = (int) $geoid;
        return $this;
    }

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
        return array(
                'count' => $this->_count,
                'min_id' => $this->_minid
        );
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
                'endpointurl' => '/v1/geographies' . $this->_geoid .
                         '/media/recent/',
                        'method' => 'get'
        );
    }
} 