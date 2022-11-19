<?php

namespace Jitoot\Airwallex\Service;

/*
 * This is the service class for Beneficiaries.
 * https://www.airwallex.com/docs/api#/Payment_Acceptance/Payment_Intents/Intro
 */

class PaymentIntentService extends AbstractService
{
    public function get($id)
    {
        return $this->request('GET', '/pa/payment_intents', ['id' => $id]);
    }

    public function create($params = [])
    {
        return $this->request('POST', '/pa/payment_intents/create', $params);
    }
}