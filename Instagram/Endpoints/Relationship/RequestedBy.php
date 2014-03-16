<?php

/**
 * ZF-Instagram - Endpoint RequestedBy
 * 
 * List the users who have requested this user's 
 * permission to follow.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/relationships/#get_incoming_requests
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Relationship_RequestedBy implements 
        ZendX_Instagram_Interfaces_Endpoint
{

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
                'endpointurl' => '/v1/users/self/requested-by/',
                'method' => 'get'
        );
    }
} 