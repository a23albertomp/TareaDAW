<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.data_provider.combination' shared service.

@trigger_error('The "prestashop.adapter.data_provider.combination" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

return $this->services['prestashop.adapter.data_provider.combination'] = new \PrestaShop\PrestaShop\Adapter\CombinationDataProvider(($this->services['prestashop.core.localization.locale.context_locale'] ?? $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')));