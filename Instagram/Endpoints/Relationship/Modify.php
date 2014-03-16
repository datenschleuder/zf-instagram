<?php

/**
 * ZF-Instagram - Endpoint Modify
 * 
 * Modify the relationship between the current user
 * and the target user.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/relationships/#post_relationship
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Relationship_Modify implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_userid = 0;

    private $_action = NULL;

    /**
     * set a user id
     *
     * @param int $userid            
     * @return ZendX_Instagram_Endpoints_Relationship_Modify
     */
    public function setUserId ($userid)
    {
        $this->_userid = (int) $userid;
        return $this;
    }

    /**
     * set one of follow/unfollow/block/unblock/approve/deny
     *
     * @param unknown_type $action            
     * @return ZendX_Instagram_Endpoints_Relationship_Modify
     */
    public function setAction ($action)
    {
        $this->_action = (string) $action;
        return $this;
    }

    /**
     * return Post-Parameter
     *
     * (non-PHPdoc)
     *
     * @see ZendX_Instagram_Interfaces_Endpoint::getData()
     * @return array
     */
    public function getData ()
    {
        return array(
                'action' => $this->_action
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
                'endpointurl' => '/v1/users/' . $this->_userid . '/relationship/',
                'method' => 'post'
        );
    }
} 