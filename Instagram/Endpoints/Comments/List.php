<?php

/**
 * ZF-Instagram - Endpoint List
 * 
 * Get a full list of comments. 
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/comments/#get_media_comments
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Comments_List implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_mediaid = 0;

    /**
     * set a media id
     *
     * @param int $userid            
     * @return ZendX_Instagram_Endpoints_Comments_Create
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
                'endpointurl' => '/v1/media/' . $this->_mediaid . '/comments/',
                'method' => 'get'
        );
    }
} 