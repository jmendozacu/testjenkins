<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver' shared autowired service.

return $this->services['Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'});
