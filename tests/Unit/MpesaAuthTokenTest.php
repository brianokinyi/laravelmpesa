<?php

namespace Manoti\Mpesa\Tests\Unit;

use Manoti\Mpesa\Facades\Mpesa;
use Manoti\Mpesa\Tests\BaseTest;

class MpesaAuthTokenTest extends BaseTest
{
    public function it_can_get_token()
    {
        $response = Mpesa::getAccessToken();
        $this->assertTrue($response);
    }
}
