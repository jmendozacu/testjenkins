<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pimcore.data_object.grid_column_config.operator.factory.locale_switcher' shared autowired service.

return $this->services['pimcore.data_object.grid_column_config.operator.factory.locale_switcher'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\LocaleSwitcherFactory(${($_ = isset($this->services['Pimcore\Localization\Locale']) ? $this->services['Pimcore\Localization\Locale'] : $this->load('getLocaleService.php')) && false ?: '_'});
