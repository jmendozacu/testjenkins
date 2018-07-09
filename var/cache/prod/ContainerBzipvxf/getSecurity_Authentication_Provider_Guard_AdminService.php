<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.admin' shared service.

return $this->services['security.authentication.provider.guard.admin'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->load('getPimcoreAdmin_Security_AdminAuthenticatorService.php')) && false ?: '_'};
}, 1), ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] : $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserProvider'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserProvider()) && false ?: '_'}, 'admin', ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()) && false ?: '_'});
