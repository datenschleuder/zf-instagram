<?php

/**
 * ZF-Instagram - Endpoint List
 * 
 * Get a list of users who have liked this media. 
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/likes/#get_media_likes
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Likes_List implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_mediaid = 0;

    /**
     * set a media id
     *
     * @param int $mediaid            
     * @return ZendX_Instagram_Endpoints_Likes_Create
     */
    public function setMediaId ($mediaid)
    {
        $this->_mediaid = (int) $mediaid;
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
                'endpointurl' => '/v1/media/' . $this->_mediaid . '/likes/',
                'method' => 'get'
        );
    }
} 