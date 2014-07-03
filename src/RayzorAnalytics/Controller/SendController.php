<?php

namespace RayzorAnalytics\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Http\Client;
use RayzorAnalytics\Service\Feature\AnalyticsServiceAwareTrait;

class SendController extends AbstractActionController
{
    use AnalyticsServiceAwareTrait;

    public function sendEventAction()
    {
        $service = $this->getAnalyticsService();
        $service->setCookie($cookie = $this->getRequest()->getCookie());
        $service->send();
        die('sent');
    }
}
