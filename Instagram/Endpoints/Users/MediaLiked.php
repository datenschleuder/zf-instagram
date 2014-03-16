<?php

/**
 * ZF-Instagram - Endpoint MediaLiked
 * 
 * See the authenticated user's list of media they've liked.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/users/#get_users_feed_liked
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Users_MediaLiked implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_count = 10;

    private $_maxlikedid = NULL;

    /**
     * Count of media to return
     *
     * @param int $count            
     * @return ZendX_Instagram_Endpoints_Users_MediaLiked
     */
    public function setCount ($count)
    {
        $this->_count = (int) $count;
        return $this;
    }

    /**
     * Return media liked before this id
     *
     * @param int $maxlikedid            
     * @return ZendX_Instagram_Endpoints_Users_MediaLiked
     */
    public function setMaxLikedId ($maxlikedid)
    {
        $this->_maxlikedid = (int) $maxlikedid;
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
                'max_liked_id' => $this->_maxlikedid
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
                'endpointurl' => '/v1/users/self/media/liked',
                'method' => 'get'
        );
    }
} 