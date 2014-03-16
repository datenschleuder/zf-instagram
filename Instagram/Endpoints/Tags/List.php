<?php

/**
 * ZF-Instagram - Endpoint List
 * 
 * Return a list of recently tagged media
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/tags/#get_tags_media_recent
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Tags_List implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_tagname = NULL;

    private $_minid = NULL;

    private $_maxid = NULL;

    /**
     * set max id
     *
     * @param int $maxid            
     * @return ZendX_Instagram_Endpoints_Tags_List
     */
    public function setMaxId ($maxid)
    {
        $this->_maxid = (int) $maxid;
        return $this;
    }

    /**
     * set min id
     *
     * @param int $minid            
     * @return ZendX_Instagram_Endpoints_Tags_List
     */
    public function setMinId ($minid)
    {
        $this->_minid = (int) $minid;
        return $this;
    }

    /**
     * set a tag name
     *
     * @param string $tagname            
     * @return ZendX_Instagram_Endpoints_Tags_Info
     */
    public function setTagName ($tagname)
    {
        $this->_tagname = (string) $tagname;
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
                'endpointurl' => '/v1/tags/' . $this->_tagname . '/media/recent/',
                'method' => 'get'
        );
    }
} 