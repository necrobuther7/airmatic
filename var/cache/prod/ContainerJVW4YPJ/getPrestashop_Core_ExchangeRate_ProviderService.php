<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.exchange_rate.provider' shared service.

return $this->services['prestashop.core.exchange_rate.provider'] = new \PrestaShop\PrestaShop\Core\Currency\ExchangeRateProvider('http://api.prestashop.com/xml/currencies.xml', ($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService())->getDefaultCurrencyIsoCode(), ($this->services['prestashop.core.currency.exchange_rate.circuit_breaker'] ?? $this->load('getPrestashop_Core_Currency_ExchangeRate_CircuitBreakerService.php')), ($this->services['cache.app'] ?? $this->getCache_AppService()));