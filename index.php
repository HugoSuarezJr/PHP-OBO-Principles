<?php

class CampaignMonitor {
    public function subscribe($email){
        die("{$email} is subscribed with Campaign Monitor");
    }
}

class Drip{
    public function subscribe($email){
        die("{$email} is subscribed with Drip");
    }
}

class NewsletterSubscriptionsController {
    public function store($newsletter){
        $email = 'joe@example.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new CampaignMonitor());
