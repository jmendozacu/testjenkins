<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Sitemap\EventListener\SitemapGeneratorListener' shared autowired service.

return $this->services['Pimcore\Sitemap\EventListener\SitemapGeneratorListener'] = new \Pimcore\Sitemap\EventListener\SitemapGeneratorListener(new \Pimcore\DependencyInjection\ServiceCollection(new \Symfony\Component\DependencyInjection\ServiceLocator(array('pimcore_documents' => function () {
    return ${($_ = isset($this->services['Pimcore\Sitemap\Document\DocumentTreeGenerator']) ? $this->services['Pimcore\Sitemap\Document\DocumentTreeGenerator'] : $this->load('getDocumentTreeGeneratorService.php')) && false ?: '_'};
})), array(0 => 'pimcore_documents')));
