<?php

/**
 * ZF-Instagram - Endpoint Search
 * 
 * Search for a location by geographic coordinate.
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/locations/#get_locations_search
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Locations_Search implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_distance = 1;

    private $_facebookid = NULL;

    private $_fouresquareid = NULL;

    private $_lng = NULL;

    private $_lat = NULL;

    /**
     * set Longitude
     *
     * @param float $lng            
     * @return ZendX_Instagram_Endpoints_Locations_Search
     */
    public function setLongitude ($lng)
    {
        $this->_lng = (float) $lng;
        return $this;
    }

    /**
     * set Latitude
     *
     * @param float $lat            
     * @return ZendX_Instagram_Endpoints_Locations_Search
     */
    public function setLatitude ($lat)
    {
        $this->_lat = (float) $lat;
        return $this;
    }

    /**
     * Returns a location mapped off of a
     * foursquare v2 api location id
     *
     * @param string $fouresquareid            
     * @return ZendX_Instagram_Endpoints_Locations_Search
     */
    public function setFouresquareId ($fouresquareid)
    {
        $this->_fouresquareid = (string) $fouresquareid;
        return $this;
    }

    /**
     * set facebook place id
     *
     * @param string $fbookid            
     * @return ZendX_Instagram_Endpoints_Locations_Search
     */
    public function setFacebookId ($fbookid)
    {
        $this->_facebookid = (string) $fbookid;
        return $this;
    }

    /**
     * set distance
     *
     * @param int $distance            
     * @return ZendX_Instagram_Endpoints_Locations_Search
     */
    public function setDistance ($distance)
    {
        $this->_distance = (int) $distance;
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
                'distance' => $this->_distance,
                'facebook_places_id' => $this->_facebookid,
                'fouresquare_v2_id' => $this->_fouresquareid,
                'lat' => $this->_lat,
                'lng' => $this->_lng
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
                'endpointurl' => '/v1/locations/search/',
                'method' => 'get'
        );
    }
} 