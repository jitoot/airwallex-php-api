<?php

namespace Test\Services;

use PHPUnit\Framework\TestCase;
use Jitoot\Airwallex\Service\BeneficiaryService;

class BeneficiaryServiceTest extends TestCase 
{
    protected $client;

    public function setUp()
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
    }

    public function testGet()
    {   
        $service = new BeneficiaryService($this->client);
        $result = $service->get(123);

        $this->assertEquals($result[0], 200);
        $this->assertTrue(is_array($result[1]));
    }

    public function testCreate()
    {   
        $service = new BeneficiaryService($this->client);
        $result = $service->create([
            'id' => 123,
            'data' => 'test',
        ]);

        $this->assertEquals($result[0], 200);
        $this->assertTrue(is_array($result[1]));
    }

    public function testGetApiSchema()
    {   
        $service = new BeneficiaryService($this->client);
        $result = $service->getApiSchema([
            'account_currency' => 'USD'
        ]);

        $this->assertEquals($result[0], 200);
        $this->assertTrue(is_array($result[1]));
    }

    public function testGetFormSchema()
    {   
        $service = new BeneficiaryService($this->client);
        $result = $service->getFormSchema([
            'account_currency' => 'USD'
        ]);

        $this->assertEquals($result[0], 200);
        $this->assertTrue(is_array($result[1]));
    }
}