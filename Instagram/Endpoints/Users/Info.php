<?php

/**
 * ZF-Instagram - Endpoint Info
 * 
 * return informations about a user
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/users/#get_users
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Users_Info implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_userid = 0;

    /**
     * set a user id
     *
     * @param int $userid            
     * @return ZendX_Instagram_Endpoints_Users_Info
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
                'endpointurl' => '/v1/users/' . $this->_userid,
                'method' => 'get'
        );
    }
} 