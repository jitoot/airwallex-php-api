<?php

namespace Jitoot\Airwallex\Service;

/*
 * Abstract base class for all services.
 */

abstract class AbstractService
{
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    protected function request($method, $path, $params)
    {
        return $this->client->request($method, $path, $params);
    }
}