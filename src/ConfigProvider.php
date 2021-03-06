<?php
/**
 * @see https://github.com/zendframework/zend-expressive-authentication-session
 *     for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license https://github.com/zendframework/zend-expressive-authentication-session/blob/master/LICENSE.md
 *     New BSD License
 */

namespace Zend\Expressive\Authentication\Session;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'authentication' => $this->getAuthenticationConfig(),
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getAuthenticationConfig() : array
    {
        return [
            'username' => '', // provide a custom field name for the username
            'password' => '', // provide a custom field name for the password
            'redirect' => '', // URI to which to redirect if no valid credentials present
        ];
    }

    public function getDependencies() : array
    {
        return [
            'factories' => [
                PhpSession::class => PhpSessionFactory::class,
            ],
        ];
    }
}
