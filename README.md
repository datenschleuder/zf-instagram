zf-instagram
==========

ZF-Instagram - Instagram Client for Zendframework, OAuth2 used for authentication and requires no Curl.




Installation:
=============

Copy the folder "Instagram" into the  directory "library/ZendX". 




Example
========


return informations about a user:

<pre><code>
$httpclient = new Zend_Http_Client();
$endpoint = new ZendX_Instagram_Endpoints_Users_Info();
$endpoint->setUserId(A USERID);

$instagram = new ZendX_Instagram_Api();
$instagram->setAccessToken(YOUR ACCESSTOKEN)
		  ->setEndpoint($endpoint)
		  ->setHttpClient($httpclient)
		  ->connect();
</code></pre>
