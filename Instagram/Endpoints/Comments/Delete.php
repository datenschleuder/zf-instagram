<?php

/**
 * ZF-Instagram - Endpoint Delete
 * 
 * Delete a comment. 
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/comments/#delete_media_comments
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Comments_Delete implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_mediaid = 0;

    private $_commentid = NULL;

    /**
     * set comment id
     *
     * @param int $commentid            
     * @return ZendX_Instagram_Endpoints_Comments_Delete
     */
    public function setCommentId ($commentid)
    {
        $this->_commentid = (int) $commentid;
        return $this;
    }

    /**
     * set a media id
     *
     * @param int $userid            
     * @return ZendX_Instagram_Endpoints_Comments_Delete
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
                'endpointurl' => '/v1/media/' . $this->_mediaid . '/comments/',
                'method' => 'delete'
        );
    }
} 