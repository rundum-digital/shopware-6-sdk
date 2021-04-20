# Rundum\Shopware6\PromotionDiscountPricesApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionDiscountPrices**](PromotionDiscountPricesApi.md#createpromotiondiscountprices) | **POST** /promotion-discount-prices | Create a new Promotion Discount Prices resources
[**deletePromotionDiscountPrices**](PromotionDiscountPricesApi.md#deletepromotiondiscountprices) | **DELETE** /promotion-discount-prices/{id} | Delete a Promotion Discount Prices resource
[**getPromotionDiscountPrices**](PromotionDiscountPricesApi.md#getpromotiondiscountprices) | **GET** /promotion-discount-prices/{id} | Detailed information about a Promotion Discount Prices resource
[**getPromotionDiscountPricesList**](PromotionDiscountPricesApi.md#getpromotiondiscountpriceslist) | **GET** /promotion-discount-prices | List with basic information of Promotion Discount Prices resources
[**updatePromotionDiscountPrices**](PromotionDiscountPricesApi.md#updatepromotiondiscountprices) | **PATCH** /promotion-discount-prices/{id} | Partially update information about a Promotion Discount Prices resource

# **createPromotionDiscountPrices**
> \Rundum\Shopware6\Model\InlineResponse200239 createPromotionDiscountPrices($body, $_response)

Create a new Promotion Discount Prices resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body158(); // \Rundum\Shopware6\Model\Body158 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPromotionDiscountPrices($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->createPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body158**](../Model/Body158.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200239**](../Model/InlineResponse200239.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPromotionDiscountPrices**
> \Rundum\Shopware6\Model\InlineResponse200239 createPromotionDiscountPrices($body, $_response)

Create a new Promotion Discount Prices resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body158(); // \Rundum\Shopware6\Model\Body158 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPromotionDiscountPrices($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->createPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body158**](../Model/Body158.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200239**](../Model/InlineResponse200239.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePromotionDiscountPrices**
> deletePromotionDiscountPrices($id, $_response)

Delete a Promotion Discount Prices resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePromotionDiscountPrices($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->deletePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionDiscountPrices**
> \Rundum\Shopware6\Model\InlineResponse200239 getPromotionDiscountPrices($id)

Detailed information about a Promotion Discount Prices resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices

try {
    $result = $apiInstance->getPromotionDiscountPrices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->getPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200239**](../Model/InlineResponse200239.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionDiscountPricesList**
> \Rundum\Shopware6\Model\InlineResponse200237 getPromotionDiscountPricesList($limit, $page, $query)

List with basic information of Promotion Discount Prices resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPromotionDiscountPricesList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->getPromotionDiscountPricesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Max amount of resources to be returned in a page | [optional]
 **page** | **int**| The page to be returned | [optional]
 **query** | **string**| Encoded SwagQL in JSON | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200237**](../Model/InlineResponse200237.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromotionDiscountPrices**
> \Rundum\Shopware6\Model\InlineResponse200239 updatePromotionDiscountPrices($id, $body, $_response)

Partially update information about a Promotion Discount Prices resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices
$body = new \Rundum\Shopware6\Model\Body159(); // \Rundum\Shopware6\Model\Body159 | Partially update information about a Promotion Discount Prices resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePromotionDiscountPrices($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->updatePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |
 **body** | [**\Rundum\Shopware6\Model\Body159**](../Model/Body159.md)| Partially update information about a Promotion Discount Prices resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200239**](../Model/InlineResponse200239.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromotionDiscountPrices**
> \Rundum\Shopware6\Model\InlineResponse200239 updatePromotionDiscountPrices($id, $body, $_response)

Partially update information about a Promotion Discount Prices resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices
$body = new \Rundum\Shopware6\Model\Body159(); // \Rundum\Shopware6\Model\Body159 | Partially update information about a Promotion Discount Prices resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePromotionDiscountPrices($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->updatePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |
 **body** | [**\Rundum\Shopware6\Model\Body159**](../Model/Body159.md)| Partially update information about a Promotion Discount Prices resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200239**](../Model/InlineResponse200239.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

