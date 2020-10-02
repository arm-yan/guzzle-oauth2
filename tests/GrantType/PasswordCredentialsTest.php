<?php

namespace ArmYan\Guzzle\Oauth2\Tests\GrantType;

use ArmYan\Guzzle\Oauth2\GrantType\PasswordCredentials;
use ArmYan\Guzzle\Oauth2\Tests\TestBase;

class PasswordCredentialsTest extends TestBase
{
    public function testMissingConfigException()
    {
        $this->setExpectedException('\\InvalidArgumentException', 'Config is missing the following keys: client_id, username, password');
        new PasswordCredentials($this->getClient());
    }

    public function testValidPasswordGetsToken()
    {
        $grantType = new PasswordCredentials($this->getClient(), [
            'client_id' => 'testClient',
            'username' => 'validUsername',
            'password' => 'validPassword',
        ]);
        $token = $grantType->getToken();
        $this->assertNotEmpty($token->getToken());
        $this->assertTrue($token->getExpires()->getTimestamp() > time());
    }
}
