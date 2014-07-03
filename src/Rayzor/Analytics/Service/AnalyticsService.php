<?php

namespace Rayzor\Analytics\Service;

use Zend\Http\Client;

class AnalyticsService
{
    protected $cookie;
    protected $userAgent;
    protected $tId;

    /**
     * @param mixed $tId
     */
    public function setTId($tId)
    {
        $this->tId = $tId;
    }

    /**
     * @return mixed
     */
    public function getTId()
    {
        return $this->tId;
    }

    /**
     * @param mixed $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param mixed $cookie
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;
    }

    /**
     * @return mixed
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    public function send()
    {
        // Assumptions are being made here in regards to the cookie format
        $cookie = $this->getCookie();
        preg_match('/_ga=[A-Za-z0-9.]{12,}[;]{0,1}/', $cookie->getFieldValue(), $matches);

        // Get the cid from the cookie
        if (empty($matches)) {
            // Default uuid, if Google Analytics is setup on the website then this should never have to be used
            $cid = '62028545.1404101234';
        } else {
            $gaCookie = explode('.', $matches[0]);
            $cid = $gaCookie[2] . '.' . $gaCookie[3];
        }

        // Google Analytics Measurement Protocol Params
        $gaParams = array(
            'v' => '1', // Version of measurement protocol
            'tid' => $this->getTId(), // Tracking ID
            'cid' => $cid, // Customer/User ID
            't' => 'event', // Type
            'ec' => 'TestCategory', // Category
            'ea' => 'TestAction6', // Action
//            'el' => 'TestLabel', // Label
//            'ev' => '1' // Value
        );

        // Send to Google Analytics via Post
        $config = array(
            'adapter'   => 'Zend\Http\Client\Adapter\Curl',
            'curloptions' => array(CURLOPT_FOLLOWLOCATION => true),
        );
        $client = new Client('http://www.google-analytics.com/collect', $config);
        $client->setMethod('POST');
        $client->setRawBody(http_build_query($gaParams));
        $client->setHeaders(array('User-Agent'=>$this->getUserAgent())); // Set to appropriate user_agent_string
        $client->send();
        die('sent');
    }
}
