<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.pimcore_mailer.transport' shared service.

$this->services['swiftmailer.mailer.pimcore_mailer.transport'] = $instance = new \Swift_Transport_MailTransport(${($_ = isset($this->services['swiftmailer.transport.mailinvoker']) ? $this->services['swiftmailer.transport.mailinvoker'] : $this->services['swiftmailer.transport.mailinvoker'] = new \Swift_Transport_SimpleMailInvoker()) && false ?: '_'}, new \Swift_Events_SimpleEventDispatcher());

$instance->registerPlugin(${($_ = isset($this->services['swiftmailer.plugin.redirecting']) ? $this->services['swiftmailer.plugin.redirecting'] : $this->load('getSwiftmailer_Plugin_RedirectingService.php')) && false ?: '_'});

return $instance;