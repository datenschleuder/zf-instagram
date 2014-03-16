<?php

/**
 * ZF-Instagram - Endpoint Info
 * 
 * Get information about a location.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/locations/#get_locations
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Locations_Info implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_locid = NULL;

    /**
     * set location id
     *
     * @param int $locationid            
     * @return ZendX_Instagram_Endpoints_Locations_Info
     */
    public function setLocationId ($locationid)
    {
        $this->_locid = (int) $locationid;
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
                'endpointurl' => '/v1/locations/' . $this->_locid,
                'method' => 'get'
        );
    }
} 