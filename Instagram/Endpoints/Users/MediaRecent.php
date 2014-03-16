<?php

/**
 * ZF-Instagram - Endpoint MediaRecent
 * 
 * Get the most recent media published by a user.
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/users/#get_users_media_recent
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Users_MediaRecent implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_userid = 0;

    private $_count = 10;

    private $_maxtimestamp = NULL;

    private $_mintimestamp = NULL;

    private $_minid = NULL;

    private $_maxid = NULL;

    /**
     * set user id
     *
     * @param int $userid            
     * @return ZendX_Instagram_Endpoints_Users_MediaRecent
     */
    public function setUserId ($userid)
    {
        $this->_userid = (int) $userid;
        return $this;
    }

    /**
     * Count of media to return
     *
     * @param int $count            
     * @return ZendX_Instagram_Endpoints_Users_MediaRecent
     */
    public function setCount ($count)
    {
        $this->_count = (int) $count;
        return $this;
    }

    /**
     * set max timestamp
     *
     * @param int $timestamp            
     * @return ZendX_Instagram_Endpoints_Users_MediaRecent
     */
    public function setMaxTimestamp ($timestamp)
    {
        $this->_maxtimestamp = (int) $timestamp;
        return $this;
    }

    /**
     * set min timestamp
     *
     * @param int $timestamp            
     * @return ZendX_Instagram_Endpoints_Users_MediaRecent
     */
    public function setMinTimestamp ($timestamp)
    {
        $this->_mintimestamp = (int) $timestamp;
        return $this;
    }

    /**
     * set min id
     *
     * @param int $minid            
     * @return ZendX_Instagram_Endpoints_Users_MediaRecent
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
     * @return ZendX_Instagram_Endpoints_Users_MediaRecent
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
                'max_timestamp' => $this->_maxtimestamp,
                'min_timestamp' => $this->_mintimestamp,
                'min_id' => $this->_minid,
                'max_id' => $this->_maxid
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
                'endpointurl' => '/v1/users/' . $this->_userid . '/media/recent/',
                'method' => 'get'
        );
    }
} 