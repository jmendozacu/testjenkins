<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.psov4wx' shared service.

return $this->services['service_locator.psov4wx'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('eventDispatcher' => function () {
    return ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'};
}));
