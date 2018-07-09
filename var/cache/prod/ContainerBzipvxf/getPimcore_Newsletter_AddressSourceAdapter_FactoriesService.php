<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore.newsletter.address_source_adapter.factories' shared autowired service.

return $this->services['pimcore.newsletter.address_source_adapter.factories'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('csvList' => function () {
    return ${($_ = isset($this->services['pimcore.document.newsletter.factory.csv']) ? $this->services['pimcore.document.newsletter.factory.csv'] : $this->services['pimcore.document.newsletter.factory.csv'] = new \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory('Pimcore\\Document\\Newsletter\\AddressSourceAdapter\\CsvList')) && false ?: '_'};
}, 'defaultAdapter' => function () {
    return ${($_ = isset($this->services['pimcore.document.newsletter.factory.default']) ? $this->services['pimcore.document.newsletter.factory.default'] : $this->services['pimcore.document.newsletter.factory.default'] = new \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory('Pimcore\\Document\\Newsletter\\AddressSourceAdapter\\DefaultAdapter')) && false ?: '_'};
}, 'reportAdapter' => function () {
    return ${($_ = isset($this->services['pimcore.document.newsletter.factory.report']) ? $this->services['pimcore.document.newsletter.factory.report'] : $this->load('getPimcore_Document_Newsletter_Factory_ReportService.php')) && false ?: '_'};
}));
