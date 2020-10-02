<?php

namespace ArmYan\Guzzle\Oauth2\GrantType;

use ArmYan\Guzzle\Oauth2\AccessToken;

interface GrantTypeInterface
{
    /**
     * Get the token data returned by the OAuth2 server.
     *
     * @return AccessToken
     */
    public function getToken();
}
