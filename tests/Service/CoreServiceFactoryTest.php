<?php

namespace Test\Services;

use PHPUnit\Framework\TestCase;
use Jitoot\Airwallex\Service\CoreServiceFactory;
use Jitoot\Airwallex\Service\BeneficiaryService;
use Jitoot\Airwallex\Service\PaymentIntentService;
use Jitoot\Airwallex\Service\PaymentLinkService;
use stdClass;

class CoreServiceFactoryTest extends TestCase 
{
    public function testGetService()
    {
        $client = new stdClass;
        $service = new CoreServiceFactory($client);
        
        $this->assertInstanceOf(BeneficiaryService::class, $service->beneficiary);
        $this->assertInstanceOf(PaymentIntentService::class, $service->paymentIntent);
        $this->assertInstanceOf(PaymentLinkService::class, $service->paymentLink);
    }
}