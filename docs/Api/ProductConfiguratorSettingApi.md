# Rundum\Shopware6\ProductConfiguratorSettingApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#createproductconfiguratorsetting) | **POST** /product-configurator-setting | Create a new Product Configurator Setting resources
[**deleteProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#deleteproductconfiguratorsetting) | **DELETE** /product-configurator-setting/{id} | Delete a Product Configurator Setting resource
[**getProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#getproductconfiguratorsetting) | **GET** /product-configurator-setting/{id} | Detailed information about a Product Configurator Setting resource
[**getProductConfiguratorSettingList**](ProductConfiguratorSettingApi.md#getproductconfiguratorsettinglist) | **GET** /product-configurator-setting | List with basic information of Product Configurator Setting resources
[**updateProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#updateproductconfiguratorsetting) | **PATCH** /product-configurator-setting/{id} | Partially update information about a Product Configurator Setting resource

# **createProductConfiguratorSetting**
> \Rundum\Shopware6\Model\InlineResponse200188 createProductConfiguratorSetting($body, $_response)

Create a new Product Configurator Setting resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body124(); // \Rundum\Shopware6\Model\Body124 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductConfiguratorSetting($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->createProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body124**](../Model/Body124.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200188**](../Model/InlineResponse200188.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductConfiguratorSetting**
> \Rundum\Shopware6\Model\InlineResponse200188 createProductConfiguratorSetting($body, $_response)

Create a new Product Configurator Setting resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body124(); // \Rundum\Shopware6\Model\Body124 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductConfiguratorSetting($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->createProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body124**](../Model/Body124.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200188**](../Model/InlineResponse200188.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductConfiguratorSetting**
> deleteProductConfiguratorSetting($id, $_response)

Delete a Product Configurator Setting resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductConfiguratorSetting($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->deleteProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductConfiguratorSetting**
> \Rundum\Shopware6\Model\InlineResponse200188 getProductConfiguratorSetting($id)

Detailed information about a Product Configurator Setting resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting

try {
    $result = $apiInstance->getProductConfiguratorSetting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->getProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200188**](../Model/InlineResponse200188.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductConfiguratorSettingList**
> \Rundum\Shopware6\Model\InlineResponse200186 getProductConfiguratorSettingList($limit, $page, $query)

List with basic information of Product Configurator Setting resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductConfiguratorSettingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->getProductConfiguratorSettingList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200186**](../Model/InlineResponse200186.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductConfiguratorSetting**
> \Rundum\Shopware6\Model\InlineResponse200188 updateProductConfiguratorSetting($id, $body, $_response)

Partially update information about a Product Configurator Setting resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting
$body = new \Rundum\Shopware6\Model\Body125(); // \Rundum\Shopware6\Model\Body125 | Partially update information about a Product Configurator Setting resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductConfiguratorSetting($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->updateProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |
 **body** | [**\Rundum\Shopware6\Model\Body125**](../Model/Body125.md)| Partially update information about a Product Configurator Setting resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200188**](../Model/InlineResponse200188.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductConfiguratorSetting**
> \Rundum\Shopware6\Model\InlineResponse200188 updateProductConfiguratorSetting($id, $body, $_response)

Partially update information about a Product Configurator Setting resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting
$body = new \Rundum\Shopware6\Model\Body125(); // \Rundum\Shopware6\Model\Body125 | Partially update information about a Product Configurator Setting resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductConfiguratorSetting($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->updateProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |
 **body** | [**\Rundum\Shopware6\Model\Body125**](../Model/Body125.md)| Partially update information about a Product Configurator Setting resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200188**](../Model/InlineResponse200188.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

