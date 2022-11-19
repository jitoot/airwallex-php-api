<?php

namespace Jitoot\Airwallex\Service;

/*
 * This is the service class for Beneficiaries.
 * https://www.airwallex.com/docs/api#/Payment_Acceptance/Payment_Links/Intro
 */

class PaymentLinkService extends AbstractService
{
    public function get($id)
    {
        return $this->request('GET', '/pa/payment_links', ['id' => $id]);
    }

    public function create($params = [])
    {
        return $this->request('POST', '/pa/payment_links/create', $params);
    }
}