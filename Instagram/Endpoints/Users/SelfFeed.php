<?php

/**
 * ZF-Instagram - Endpoint SelfFeed
 * 
 * See the authenticated user's feed.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/users/#get_users_feed
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Users_SelfFeed implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_count = 10;

    private $_minid = NULL;

    private $_maxid = NULL;

    /**
     * Count of media to return
     *
     * @param unknown_type $count            
     * @return ZendX_Instagram_Endpoints_Users_SelfFeed
     */
    public function setCount ($count)
    {
        $this->_count = (int) $count;
        return $this;
    }

    /**
     * set min id
     *
     * @param int $minid            
     * @return ZendX_Instagram_Endpoints_Users_SelfFeed
     */
    public function setMinId ($minid)
    {
        $this->_minid = (int) $minid;
        return $this;
    }

    /**
     * set max id
     *
     * @param int $maxid            
     * @return ZendX_Instagram_Endpoints_Users_SelfFeed
     */
    public function setMaxId ($maxid)
    {
        $this->_maxid = (int) $maxid;
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
                'min_id' => $this->_minid,
                'max_id' => $this->_maxid
        );
    }

    /**
     * return url params
     *
     * (non-PHPdoc)
     *
     * @see ZendX_instagram_Interfaces_Endpoint::getUrl()
     * @return array
     */
    public function getUrl ()
    {
        return array(
                'endpointurl' => '/v1/users/self/feed/',
                'method' => 'get'
        );
    }
} 