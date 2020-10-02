<?php

namespace ArmYan\Guzzle\Oauth2\Tests\GrantType;

use ArmYan\Guzzle\Oauth2\GrantType\RefreshToken;
use ArmYan\Guzzle\Oauth2\Tests\TestBase;

class RefreshTokenTest extends TestBase
{
    public function testGetTokenChecksForRefreshToken()
    {
        $grant = new RefreshToken($this->getClient(), ['client_id' => 'test']);
        $this->setExpectedException('\\RuntimeException');
        $grant->getToken();
    }
}
