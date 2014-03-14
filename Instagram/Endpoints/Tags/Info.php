<?php

/**
 * ZF-Instagram - Endpoint Info
 * 
 * Get information about a tag object.
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/tags/#get_tags
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Tags_Info implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_tagname = NULL;

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
                'endpointurl' => '/v1/tags/' . $this->_tagname,
                'method' => 'get'
        );
    }
} 