<?php

/**
 * ZF-Instagram - Endpoint Follows
 * 
 * Get the list of users this user follows.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/relationships/#get_users_follows
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Relationship_Follows implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_userid = 0;

    /**
     * set a user id
     *
     * @param int $userid            
     * @return ZendX_Instagram_Endpoints_Relationship_Follows
     */
    public function setUserId ($userid)
    {
        $this->_userid = (int) $userid;
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
                'endpointurl' => '/v1/users/' . $this->_userid . '/follows/',
                'method' => 'get'
        );
    }
} 