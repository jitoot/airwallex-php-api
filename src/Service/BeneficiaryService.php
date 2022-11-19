<?php

namespace Jitoot\Airwallex\Service;

/*
 * This is the service class for Beneficiaries.
 * https://www.airwallex.com/docs/api#/Payouts/Beneficiaries/Intro
 */

class BeneficiaryService extends AbstractService
{
    public function get($id)
    {
        return $this->request('GET', '/beneficiaries', ['id' => $id]);
    }

    public function create($params = [])
    {
        return $this->request('POST', '/beneficiaries/create', $params);
    }

    public function getApiSchema($params = [])
    {
        return $this->request('POST', '/beneficiary_api_schemas/generate', $params);
    }

    public function getFormSchema($params = [])
    {
        return $this->request('POST', '/beneficiary_form_schemas/generate', $params);
    }
}