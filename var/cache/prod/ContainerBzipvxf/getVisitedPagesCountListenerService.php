<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\EventListener\VisitedPagesCountListener' shared autowired service.

return $this->services['Pimcore\Targeting\EventListener\VisitedPagesCountListener'] = new \Pimcore\Targeting\EventListener\VisitedPagesCountListener(${($_ = isset($this->services['Pimcore\Targeting\Service\VisitedPagesCounter']) ? $this->services['Pimcore\Targeting\Service\VisitedPagesCounter'] : $this->load('getVisitedPagesCounter2Service.php')) && false ?: '_'});
