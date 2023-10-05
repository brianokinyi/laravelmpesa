<?php

namespace Manoti\Mpesa\Tests\Unit;

use Manoti\Mpesa\Facades\Mpesa;
use Manoti\Mpesa\Tests\BaseTest;

class MpesaRegisterUrlsTest extends BaseTest
{
    public function it_can_register_urls()
    {
        $response = Mpesa::registerUrls();
        $data = json_decode($response, true);
        //$this->assertTrue($response);

        $this->assertArrayHasKey('ConversationID', $data);
        $this->assertArrayHasKey('OriginatorConversationID', $data);
        $this->assertArrayHasKey('ResponseDescription', $data);
    }
}
