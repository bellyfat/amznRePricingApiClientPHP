# eSaguAmznRePricingAPIV1
eSagu API to reprice items on amazon.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/e-sagu/amzn-re-pricing-api-client-php.git"
    }
  ],
  "require": {
    "e-sagu/amzn-re-pricing-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/eSaguAmznRePricingAPIV1/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBuyBoxSettingsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBuyBoxSettingsApi->callList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*RepricingBuyBoxSettingsApi* | [**callList**](docs/Api/RepricingBuyBoxSettingsApi.md#calllist) | **GET** /buy-box-settings | Get all user service&#39;s buy box settings.
*RepricingBuyBoxSettingsApi* | [**delete**](docs/Api/RepricingBuyBoxSettingsApi.md#delete) | **DELETE** /buy-box-settings/{buyBoxSettingsId} | Delete buy box settings by id.
*RepricingBuyBoxSettingsApi* | [**get**](docs/Api/RepricingBuyBoxSettingsApi.md#get) | **GET** /buy-box-settings/{buyBoxSettingsId} | Get the buy box settings specified by it&#39;s id.
*RepricingBuyBoxSettingsApi* | [**post**](docs/Api/RepricingBuyBoxSettingsApi.md#post) | **POST** /buy-box-settings | Adds new buy box settings.
*RepricingBuyBoxSettingsApi* | [**put**](docs/Api/RepricingBuyBoxSettingsApi.md#put) | **PUT** /buy-box-settings/{buyBoxSettingsId} | Edit buy box settings by id.
*RepricingBuyBoxSlotsApi* | [**callList**](docs/Api/RepricingBuyBoxSlotsApi.md#calllist) | **GET** /buy-box-slots | Get all user service&#39;s buy box slots.
*RepricingBuyBoxSlotsApi* | [**get**](docs/Api/RepricingBuyBoxSlotsApi.md#get) | **GET** /buy-box-slots/{buyBoxSlotsId} | Get the buy box slots specified by it&#39;s id.
*RepricingCSVImportApi* | [**callList**](docs/Api/RepricingCSVImportApi.md#calllist) | **GET** /csv-import | Get a list of all CSV imports.
*RepricingCSVImportApi* | [**get**](docs/Api/RepricingCSVImportApi.md#get) | **GET** /csv-import/{csvImportId} | Get the specified single CSV import.
*RepricingCSVImportApi* | [**post**](docs/Api/RepricingCSVImportApi.md#post) | **POST** /csv-import | Creates a new CSV import.
*RepricingCSVRequestApi* | [**callList**](docs/Api/RepricingCSVRequestApi.md#calllist) | **GET** /csv-request | Get a list of all CSV requests of a user&#39;s service.
*RepricingCSVRequestApi* | [**get**](docs/Api/RepricingCSVRequestApi.md#get) | **GET** /csv-request/{csvRequestId} | Get a single CSV request of a user&#39;s service specified by its id.
*RepricingCSVRequestApi* | [**post**](docs/Api/RepricingCSVRequestApi.md#post) | **POST** /csv-request | Creates a new CSV request for a user&#39;s service.
*RepricingCSVRequestPresetApi* | [**callList**](docs/Api/RepricingCSVRequestPresetApi.md#calllist) | **GET** /csv-request/preset | Gets csv request presets .
*RepricingCSVRequestPresetApi* | [**delete**](docs/Api/RepricingCSVRequestPresetApi.md#delete) | **DELETE** /csv-request/preset/{csvRequestPresetId} | Delete a csv request preset by id.
*RepricingCSVRequestPresetApi* | [**get**](docs/Api/RepricingCSVRequestPresetApi.md#get) | **GET** /csv-request/preset/{csvRequestPresetId} | Get a csv request preset specified by it&#39;s id.
*RepricingCSVRequestPresetApi* | [**post**](docs/Api/RepricingCSVRequestPresetApi.md#post) | **POST** /csv-request/preset | Adds a csv request preset.
*RepricingCSVRequestPresetApi* | [**put**](docs/Api/RepricingCSVRequestPresetApi.md#put) | **PUT** /csv-request/preset/{csvRequestPresetId} | Edit a csv request preset.
*RepricingCustomCodeApi* | [**callList**](docs/Api/RepricingCustomCodeApi.md#calllist) | **GET** /custom-code | Gets a custom code list.
*RepricingCustomCodeApi* | [**get**](docs/Api/RepricingCustomCodeApi.md#get) | **GET** /custom-code/{customCodeId} | Get the custom code specified by it&#39;s id.
*RepricingExclusionCriteriaApi* | [**callList**](docs/Api/RepricingExclusionCriteriaApi.md#calllist) | **GET** /exclusion-criteria | Gets all exclusion criteria of a service.
*RepricingExclusionCriteriaApi* | [**delete**](docs/Api/RepricingExclusionCriteriaApi.md#delete) | **DELETE** /exclusion-criteria/{exclusionCriteriaId} | Delete the exclusion criteria.
*RepricingExclusionCriteriaApi* | [**get**](docs/Api/RepricingExclusionCriteriaApi.md#get) | **GET** /exclusion-criteria/{exclusionCriteriaId} | Gets the exclusion criteria by id.
*RepricingExclusionCriteriaApi* | [**post**](docs/Api/RepricingExclusionCriteriaApi.md#post) | **POST** /exclusion-criteria | Adds a new exclusion criteria.
*RepricingExclusionCriteriaApi* | [**put**](docs/Api/RepricingExclusionCriteriaApi.md#put) | **PUT** /exclusion-criteria/{exclusionCriteriaId} | Edit the exclusion criteria.
*RepricingItemApi* | [**callList**](docs/Api/RepricingItemApi.md#calllist) | **GET** /item | Gets a list of repricing items.
*RepricingItemApi* | [**get**](docs/Api/RepricingItemApi.md#get) | **GET** /item/{itemId} | Get a single repricing item specified by it&#39;s id.
*RepricingItemStrategyApi* | [**get**](docs/Api/RepricingItemStrategyApi.md#get) | **GET** /item/{itemId}/strategy | Gets the item&#39;s strategy settings.
*RepricingItemStrategyApi* | [**put**](docs/Api/RepricingItemStrategyApi.md#put) | **PUT** /item/{itemId}/strategy | Creates or updates the item&#39;s strategy settings.
*RepricingOrderHistoryApi* | [**get**](docs/Api/RepricingOrderHistoryApi.md#get) | **GET** /order-history | Gets stats of the order history for given userService.
*RepricingPriceGapsApi* | [**callList**](docs/Api/RepricingPriceGapsApi.md#calllist) | **GET** /price-gaps | Gets all price gaps of a service.
*RepricingPriceGapsApi* | [**delete**](docs/Api/RepricingPriceGapsApi.md#delete) | **DELETE** /price-gaps/{priceGapsId} | Delete a price gap by id.
*RepricingPriceGapsApi* | [**get**](docs/Api/RepricingPriceGapsApi.md#get) | **GET** /price-gaps/{priceGapsId} | Get a price gap specified by it&#39;s id.
*RepricingPriceGapsApi* | [**post**](docs/Api/RepricingPriceGapsApi.md#post) | **POST** /price-gaps | Adds a new price gap.
*RepricingPriceGapsApi* | [**put**](docs/Api/RepricingPriceGapsApi.md#put) | **PUT** /price-gaps/{priceGapsId} | Edit a price gap.
*RepricingSettingsApi* | [**get**](docs/Api/RepricingSettingsApi.md#get) | **GET** /settings | Gets the repricing settings.
*RepricingSettingsApi* | [**post**](docs/Api/RepricingSettingsApi.md#post) | **POST** /settings | Adds new repricing settings if not exists.
*RepricingSettingsApi* | [**put**](docs/Api/RepricingSettingsApi.md#put) | **PUT** /settings | Edit the repricing settings.
*RepricingShippingCostsApi* | [**callList**](docs/Api/RepricingShippingCostsApi.md#calllist) | **GET** /shipping-costs | Gets all shipping costs fo a service.
*RepricingShippingCostsApi* | [**delete**](docs/Api/RepricingShippingCostsApi.md#delete) | **DELETE** /shipping-costs/{shippingCostsId} | Remove the repricing shipping costs by id.
*RepricingShippingCostsApi* | [**get**](docs/Api/RepricingShippingCostsApi.md#get) | **GET** /shipping-costs/{shippingCostsId} | Get the shipping costs specified by it&#39;s id.
*RepricingShippingCostsApi* | [**post**](docs/Api/RepricingShippingCostsApi.md#post) | **POST** /shipping-costs | Adds new repricing shipping costs for service.
*RepricingShippingCostsApi* | [**put**](docs/Api/RepricingShippingCostsApi.md#put) | **PUT** /shipping-costs/{shippingCostsId} | Edit the repricing shipping costs by id.
*TimeZoneApi* | [**callList**](docs/Api/TimeZoneApi.md#calllist) | **GET** /time-zone | Gets all available TimeZones.


## Documentation For Models

 - [ExclusionCriterionRatingDTO](docs/Model/ExclusionCriterionRatingDTO.md)
 - [ExclusionCriterionSellerIdDTO](docs/Model/ExclusionCriterionSellerIdDTO.md)
 - [ExclusionCriterionShippingTimeDTO](docs/Model/ExclusionCriterionShippingTimeDTO.md)
 - [ExclusionCriterionShipsFromDTO](docs/Model/ExclusionCriterionShipsFromDTO.md)
 - [ItemOfferDTO](docs/Model/ItemOfferDTO.md)
 - [PriceGapDTO](docs/Model/PriceGapDTO.md)
 - [RepricingAmazonOrderHistoryDTO](docs/Model/RepricingAmazonOrderHistoryDTO.md)
 - [RepricingBuyBoxSettingsDTO](docs/Model/RepricingBuyBoxSettingsDTO.md)
 - [RepricingBuyBoxSlotsDTO](docs/Model/RepricingBuyBoxSlotsDTO.md)
 - [RepricingCSVImportDTO](docs/Model/RepricingCSVImportDTO.md)
 - [RepricingCSVRequestDTO](docs/Model/RepricingCSVRequestDTO.md)
 - [RepricingCSVRequestPresetDTO](docs/Model/RepricingCSVRequestPresetDTO.md)
 - [RepricingCustomCodeDTO](docs/Model/RepricingCustomCodeDTO.md)
 - [RepricingExclusionCriteriaDTO](docs/Model/RepricingExclusionCriteriaDTO.md)
 - [RepricingFeedSubmissionDTO](docs/Model/RepricingFeedSubmissionDTO.md)
 - [RepricingItemDTO](docs/Model/RepricingItemDTO.md)
 - [RepricingItemOptimizationResultDTO](docs/Model/RepricingItemOptimizationResultDTO.md)
 - [RepricingItemPriceSettingsDTO](docs/Model/RepricingItemPriceSettingsDTO.md)
 - [RepricingItemStrategyDTO](docs/Model/RepricingItemStrategyDTO.md)
 - [RepricingPriceGapsDTO](docs/Model/RepricingPriceGapsDTO.md)
 - [RepricingSettingsDTO](docs/Model/RepricingSettingsDTO.md)
 - [RepricingShippingCostsDTO](docs/Model/RepricingShippingCostsDTO.md)
 - [ShippingCostDTO](docs/Model/ShippingCostDTO.md)


## Documentation For Authorization


## jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




