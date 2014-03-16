<?php

/**
 * ZF-Instagram - Endpoint Info
 * 
 * Get a list of recent media objects from 
 * a given location.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/locations/#get_locations_media_recent
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Locations_List implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_locid = NULL;

    private $_mintimestamp = NULL;

    private $_maxtimestamp = NULL;

    private $_minid = NULL;

    private $_maxid = NULL;

    /**
     * set min id
     *
     * @param int $minid            
     * @return ZendX_Instagram_Endpoints_Locations_List
     */
    public function setMinId ($minid)
    {
        $this->_minid = (int) $minid;
        return $this;
    }

    /**
     * set max timestamp
     *
     * @param int $maxtimestamp            
     * @return ZendX_Instagram_Endpoints_Locations_List
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
     * @return ZendX_Instagram_Endpoints_Locations_List
     */
    public function setMinTimestamp ($mintimestamp)
    {
        $this->_mintimestamp = (int) $mintimestamp;
        return $this;
    }

    /**
     * set location id
     *
     * @param int $locationid            
     * @return ZendX_Instagram_Endpoints_Locations_List
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
        return array(
                'min_timestamp' => $this->_mintimestamp,
                'max_timestamp' => $this->_maxtimestamp,
                'max_id' => $this->_maxid,
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
                'endpointurl' => '/v1/locations/' . $this->_locid .
                         '/media/recent/',
                        'method' => 'get'
        );
    }
} 