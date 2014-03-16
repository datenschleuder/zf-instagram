<?php

/**
 * ZF-Instagram - Endpoint Search
 * 
 * Searching for a user
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/users/#get_users_search
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Users_Search implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_count = 10;

    private $_searchparam = NULL;

    /**
     * Number of users to return
     *
     * @param int $count            
     * @return ZendX_Instagram_Endpoints_Users_Search
     */
    public function setCount ($count)
    {
        $this->_count = (int) $count;
        return $this;
    }

    /**
     * set search value
     *
     * @param string $search            
     * @return ZendX_Instagram_Endpoints_Users_Search
     */
    public function setSearchParam ($search)
    {
        $this->_searchparam = (string) $search;
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
                'q' => $this->_searchparam
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
                'endpointurl' => '/v1/users/self/media/liked/',
                'method' => 'get'
        );
    }
} 