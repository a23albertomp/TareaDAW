<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.extractor.crowdin.php' shared service.

return $this->services['prestashop.translation.extractor.crowdin.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\CrowdinPhpExtractor(($this->services['prestashop.translation.parser.crowdin_php_parser'] ?? ($this->services['prestashop.translation.parser.crowdin_php_parser'] = new \PrestaShop\TranslationToolsBundle\Translation\Parser\CrowdinPhpParser())), ($this->services['prestashop.translation.manager.original_string_manager'] ?? $this->load('getPrestashop_Translation_Manager_OriginalStringManagerService.php')));