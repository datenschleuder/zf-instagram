<?php

/**
 * ZF-Instagram - Endpoint Search
 * 
 * Search for media in a given area. 
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/media/#get_media_search
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Media_Search implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_lat = NULL;

    private $_lng = NULL;

    private $_distance = 1;

    private $_mintimestamp = NULL;

    private $_maxtimestamp = NULL;

    /**
     * set max timestamp
     *
     * @param int $maxtimestamp            
     * @return ZendX_Instagram_Endpoints_Media_Search
     */
    public function setMaxTimestamp ($maxtimestamp)
    {
        $this->_maxtimestamp = (int) $maxtimestamp;
        return $this;
    }

    /**
     * set min timestamp
     *
     * @param int $mintimestamp            
     * @return ZendX_Instagram_Endpoints_Media_Search
     */
    public function setMinTimestamp ($mintimestamp)
    {
        $this->_mintimestamp = (int) $mintimestamp;
        return $this;
    }

    /**
     * set distance
     *
     * @param int $distance            
     * @return ZendX_Instagram_Endpoints_Media_Search
     */
    public function setDistance ($distance)
    {
        $this->_distance = (int) $distance;
        return $this;
    }

    /**
     * set Latitude
     *
     * @param float $lat            
     * @return ZendX_Instagram_Endpoints_Media_Search
     */
    public function setLatitude ($lat)
    {
        $this->_lat = (float) $lat;
        return $this;
    }

    /**
     * set Longitude
     *
     * @param float $lng            
     * @return ZendX_Instagram_Endpoints_Media_Search
     */
    public function setLongitude ($lng)
    {
        $this->_lng = (float) $lng;
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
                'lat' => $this->_lat,
                'lng' => $this->_lng,
                'distance' => $this->_distance,
                'max_timestamp' => $this->_maxtimestamp,
                'min_timestamp' => $this->_mintimestamp
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
                'endpointurl' => '/v1/media/search/',
                'method' => 'get'
        );
    }
} 