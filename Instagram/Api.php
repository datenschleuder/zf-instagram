<?php

/**
 * ZF-Instagram - A simple Instagram Client for Zendframework
 *
 * https://github.com/datenschleuder/zf-instagram
 *
 *
 * @author     Jürgen Meier <support@mypasswordsafe.net>
 * @copyright  Jürgen Meier 2014
 * @version    1.0
 * @license    BSD
 */
final class ZendX_Instagram_Api
{

    private $_httpclient = NULL;

    private $_endpoint = NULL;

    private $_accesstoken = NULL;

    private $_clientid = NULL;

    
    /**
     * set client id
     *
     * @param string $clientid            
     * @return ZendX_Instagram_Api
     */
    public function setClientId ($clientid)
    {
        $this->_clientid = (string) $clientid;
        return $this;
    }

    /**
     * set http client
     *
     * @param Zend_Http_Client $client            
     * @return ZendX_Instagram_Api
     */
    public function setHttpClient (Zend_Http_Client $client)
    {
        $this->_httpclient = $client;
        return $this;
    }

    /**
     * set access token
     *
     * @param string $accesstoken            
     * @return ZendX_Instagram_Api
     */
    public function setAccessToken ($accesstoken)
    {
        $this->_accesstoken = (string) $accesstoken;
        return $this;
    }

    /**
     * set instagram endpoint
     *
     * @param object $endpoint            
     * @return ZendX_Instagram_Api
     */
    public function setEndpoint ($endpoint)
    {
        $this->_endpoint = (object) $endpoint;
        return $this;
    }

    /**
     * connect to instagram api
     *
     * @return void
     */
    public function connect ()
    {
        $httpclient = $this->_httpclient;
        $endpointurl = $this->_endpoint->getUrl();
        
        $httpclient->setUri(
                'https://api.instagram.com' . $endpointurl['endpointurl']);
        if (! is_null($this->_accesstoken)) {
            $httpclient->setParameterGet('access_token', $this->_accesstoken);
        }
        if (! is_null($this->_clientid)) {
            $httpclient->setParameterGet('client_id', $this->_clientid);
        }
        
        $this->_setParams();
        return Zend_Json::decode(
                $httpclient->request(
                        '' . strtoupper($endpointurl['method']) . '')->getBody());
    }

    /**
     * read and set params from Instagram endpoint
     *
     * @return void
     */
    private function _setParams ()
    {
        $endpoint = $this->_endpoint->getData();
        if (count($endpoint) > 0) {
            
            $method = $this->_endpoint->getUrl();
            $methodname = 'setParameter' . ucfirst($method['method']);
            
            foreach ($endpoint as $param => $value) {
                $this->_httpclient->{$methodname}($param, $value);
            }
        }
    }
}