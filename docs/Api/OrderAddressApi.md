# Rundum\Shopware6\OrderAddressApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderAddress**](OrderAddressApi.md#createorderaddress) | **POST** /order-address | Create a new Order Address resources
[**deleteOrderAddress**](OrderAddressApi.md#deleteorderaddress) | **DELETE** /order-address/{id} | Delete a Order Address resource
[**getOrderAddress**](OrderAddressApi.md#getorderaddress) | **GET** /order-address/{id} | Detailed information about a Order Address resource
[**getOrderAddressList**](OrderAddressApi.md#getorderaddresslist) | **GET** /order-address | List with basic information of Order Address resources
[**updateOrderAddress**](OrderAddressApi.md#updateorderaddress) | **PATCH** /order-address/{id} | Partially update information about a Order Address resource

# **createOrderAddress**
> \Rundum\Shopware6\Model\InlineResponse200161 createOrderAddress($body, $_response)

Create a new Order Address resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body106(); // \Rundum\Shopware6\Model\Body106 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderAddress($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->createOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body106**](../Model/Body106.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderAddress**
> \Rundum\Shopware6\Model\InlineResponse200161 createOrderAddress($body, $_response)

Create a new Order Address resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body106(); // \Rundum\Shopware6\Model\Body106 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderAddress($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->createOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body106**](../Model/Body106.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderAddress**
> deleteOrderAddress($id, $_response)

Delete a Order Address resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_address
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderAddress($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->deleteOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_address |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderAddress**
> \Rundum\Shopware6\Model\InlineResponse200161 getOrderAddress($id)

Detailed information about a Order Address resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_address

try {
    $result = $apiInstance->getOrderAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->getOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_address |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderAddressList**
> \Rundum\Shopware6\Model\InlineResponse200159 getOrderAddressList($limit, $page, $query)

List with basic information of Order Address resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderAddressList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->getOrderAddressList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderAddress**
> \Rundum\Shopware6\Model\InlineResponse200161 updateOrderAddress($id, $body, $_response)

Partially update information about a Order Address resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_address
$body = new \Rundum\Shopware6\Model\Body107(); // \Rundum\Shopware6\Model\Body107 | Partially update information about a Order Address resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderAddress($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->updateOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_address |
 **body** | [**\Rundum\Shopware6\Model\Body107**](../Model/Body107.md)| Partially update information about a Order Address resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderAddress**
> \Rundum\Shopware6\Model\InlineResponse200161 updateOrderAddress($id, $body, $_response)

Partially update information about a Order Address resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\OrderAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_address
$body = new \Rundum\Shopware6\Model\Body107(); // \Rundum\Shopware6\Model\Body107 | Partially update information about a Order Address resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderAddress($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderAddressApi->updateOrderAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_address |
 **body** | [**\Rundum\Shopware6\Model\Body107**](../Model/Body107.md)| Partially update information about a Order Address resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200161**](../Model/InlineResponse200161.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

