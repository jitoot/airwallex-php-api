<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Jitoot\Airwallex\Client;
use Jitoot\Airwallex\Service\BeneficiaryService;

class ClientTest extends TestCase 
{
    public function testGetService()
    {
        $client = new Client;
        $this->assertInstanceOf(BeneficiaryService::class, $client->beneficiary);
    }

    public function testAuthenticate()
    {
        $this->client = $this->getMockBuilder(Client::class)
        ->setMethods(['request'])
        ->getMock();

        $this->client->expects($this->any())
            ->method('request')
            ->will($this->returnValue([
                200,
                [
                    'test data'
                ]
            ]));
        
        $client = new Client;
        $this->assertInstanceOf(BeneficiaryService::class, $client->beneficiary);
    }
}