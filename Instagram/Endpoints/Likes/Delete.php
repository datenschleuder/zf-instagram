<?php

/**
 * ZF-Instagram - Endpoint Delete
 * 
 * Remove a like on this media by the user. 
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/likes/#delete_likes
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Likes_Delete implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_mediaid = 0;

    /**
     * set a media id
     *
     * @param int $mediaid            
     * @return ZendX_Instagram_Endpoints_Likes_Delete
     */
    public function setMediaId ($mediaid)
    {
        $this->_mediaid = (int) $mediaid;
        return $this;
    }

    /**
     * return POST-Parameter
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
                'method' => 'delete'
        );
    }
} 