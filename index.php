<?php

class Subscription{
/**
 * Option 3: Use Object Compostion
 * @var \Gateway
 */
    protected $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create(){

    }

    public function cancel(){
        // How to cancel: api request
        // find stripe customer
        $this->gateway->findCustomer();
        // find stripe subscription by customer
    }

    public function invoice(){

    }

    public function swap($newPlan){

    }

    // Option 1 *Not so good option for this setting*
    protected function findStripeCustomer(){

    }

    protected function findStripeSubscriptionByCustomer(){

    }
}

// Option 2 *Use inheritance*
// class BillableSubscription extends Subscripiton{
//     protected function findStripeCustomer(){

//     }

//     protected function findStripeSubscriptionByCustomer(){

//     }
// }
interface Gateway {
    public function findCustomer();

    public function findSubscriptionByCustomer();
}
class StripeGateway implements Gateway {

    public function findCustomer(){

    }

    public function findSubscriptionByCustomer(){

    }
}

class BraintreeGateway implements Gateway {

    public function findCustomer(){

    }

    public function findSubscriptionByCustomer(){

    }
}

new Subcription(new BraintreeGateway());