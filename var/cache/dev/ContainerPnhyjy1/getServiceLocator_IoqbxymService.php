<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.ioqbxym' shared service.

return $this->services['service_locator.ioqbxym'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('cache' => function () {
    return ${($_ = isset($this->services['pimcore.cache.core.handler']) ? $this->services['pimcore.cache.core.handler'] : $this->getPimcore_Cache_Core_HandlerService()) && false ?: '_'};
}, 'db' => function () {
    return ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'};
}, 'eventDispatcher' => function () {
    return ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'};
}, 'filesystem' => function () {
    return ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'};
}, 'kernel' => function () {
    return ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', /* ContainerInterface::NULL_ON_INVALID_REFERENCE */ 2)) && false ?: '_'};
}, 'symfonyCacheClearer' => function () {
    $f = function (\Pimcore\Cache\Symfony\CacheClearer $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Cache\Symfony\CacheClearer']) ? $this->services['Pimcore\Cache\Symfony\CacheClearer'] : $this->services['Pimcore\Cache\Symfony\CacheClearer'] = new \Pimcore\Cache\Symfony\CacheClearer()) && false ?: '_'});
}));