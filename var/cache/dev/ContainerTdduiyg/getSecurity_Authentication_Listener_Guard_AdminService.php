<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.guard.admin' shared service.

return $this->services['security.authentication.listener.guard.admin'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(${($_ = isset($this->services['security.authentication.guard_handler']) ? $this->services['security.authentication.guard_handler'] : $this->load('getSecurity_Authentication_GuardHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, 'admin', new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['pimcore_admin.security.admin_authenticator']) ? $this->services['pimcore_admin.security.admin_authenticator'] : $this->load('getPimcoreAdmin_Security_AdminAuthenticatorService.php')) && false ?: '_'};
}, 1), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->getMonolog_Logger_SecurityService()) && false ?: '_'});
