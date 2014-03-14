<?php

/**
 * ZF-Instagram - Endpoint Search
 * 
 * Search for tags by name.
 *
 * http://zfmodules.mypasswordsafe.net
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @see        http://instagram.com/developer/endpoints/tags/#get_tags_search
 * @license    BSD
 */
final class ZendX_Instagram_Endpoints_Tags_Search implements 
        ZendX_Instagram_Interfaces_Endpoint
{

    private $_searchparam = NULL;

    /**
     * set a search param
     *
     * @param string $search            
     * @return ZendX_Instagram_Endpoints_Tags_Search
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
                'endpointurl' => '/v1/tags/',
                'method' => 'get'
        );
    }
} 