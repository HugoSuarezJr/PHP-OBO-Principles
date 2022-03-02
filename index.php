<?php
class NewsletterSubscriptionsController {
    public function store(Newsletter $newsletter){
        $email = 'joe@example.com';
        $newsletter->subscribe($email);
    }
}

interface Newsletter{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter{
    public function subscribe($email){
        var_dump("{$email} is subscribed with Campaign Monitor");
    }
}

class Drip implements Newsletter{
    public function subscribe($email){
        var_dump("{$email} is subscribed with Drip");
    }
}


$controller = new NewsletterSubscriptionsController();

$controller->store(new CampaignMonitor());
$controller->store(new Drip());
