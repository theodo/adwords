<?php

namespace Google\Api\Ads\Common\Util;

/**
 * Class Oauth2Exception
 *
 * @package Google\Api\Ads\Common\Util
 */
class OAuth2Exception extends \Exception
{
    public function __construct($message, $code = null)
    {
        parent::__construct($message, $code);
    }
}