<?php

class CampaignMonitor {
    public function __construct($apiKey){
        $this->apiKey = $apiKey;
    }

    public function subscribe($email){

    }
}

class Drip{
    public function subscribe($email){
        // 
    }
}

class NewsletterSubscriptionsController {
    public function store(CampaignMonitor $newsletter){
        // $newsletter->subscribe(auth()->user()->email);
    }
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new Campaignmonitor('apikey1234'));

var_dump($controller);