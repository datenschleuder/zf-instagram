<?php

/**
 * ZF-Instagram - Endpoint Create
 * 
 * Create a comment. 
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/comments/#post_media_comments
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Comments_Create implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_mediaid = 0;

    private $_commenttxt = NULL;

    /**
     * set comment text
     *
     * @param string $text            
     * @return ZendX_Instagram_Endpoints_Comments_Create
     */
    public function setCommentText ($text)
    {
        $this->_commenttxt = (string) $text;
        return $this;
    }

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
     * return POST-Parameter
     *
     * (non-PHPdoc)
     *
     * @see ZendX_Instagram_Interfaces_Endpoint::getData()
     * @return array
     */
    public function getData ()
    {
        return array(
                'text' => $this->_commenttxt
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
                'endpointurl' => '/v1/media/' . $this->_mediaid . '/comments/',
                'method' => 'post'
        );
    }
} 