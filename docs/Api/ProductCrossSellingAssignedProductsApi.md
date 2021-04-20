# Rundum\Shopware6\ProductCrossSellingAssignedProductsApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductCrossSellingAssignedProducts**](ProductCrossSellingAssignedProductsApi.md#createproductcrosssellingassignedproducts) | **POST** /product-cross-selling-assigned-products | Create a new Product Cross Selling Assigned Products resources
[**deleteProductCrossSellingAssignedProducts**](ProductCrossSellingAssignedProductsApi.md#deleteproductcrosssellingassignedproducts) | **DELETE** /product-cross-selling-assigned-products/{id} | Delete a Product Cross Selling Assigned Products resource
[**getProductCrossSellingAssignedProducts**](ProductCrossSellingAssignedProductsApi.md#getproductcrosssellingassignedproducts) | **GET** /product-cross-selling-assigned-products/{id} | Detailed information about a Product Cross Selling Assigned Products resource
[**getProductCrossSellingAssignedProductsList**](ProductCrossSellingAssignedProductsApi.md#getproductcrosssellingassignedproductslist) | **GET** /product-cross-selling-assigned-products | List with basic information of Product Cross Selling Assigned Products resources
[**updateProductCrossSellingAssignedProducts**](ProductCrossSellingAssignedProductsApi.md#updateproductcrosssellingassignedproducts) | **PATCH** /product-cross-selling-assigned-products/{id} | Partially update information about a Product Cross Selling Assigned Products resource

# **createProductCrossSellingAssignedProducts**
> \Rundum\Shopware6\Model\InlineResponse200194 createProductCrossSellingAssignedProducts($body, $_response)

Create a new Product Cross Selling Assigned Products resources

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body128(); // \Rundum\Shopware6\Model\Body128 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductCrossSellingAssignedProducts($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->createProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body128**](../Model/Body128.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200194**](../Model/InlineResponse200194.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductCrossSellingAssignedProducts**
> \Rundum\Shopware6\Model\InlineResponse200194 createProductCrossSellingAssignedProducts($body, $_response)

Create a new Product Cross Selling Assigned Products resources

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body128(); // \Rundum\Shopware6\Model\Body128 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductCrossSellingAssignedProducts($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->createProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body128**](../Model/Body128.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200194**](../Model/InlineResponse200194.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductCrossSellingAssignedProducts**
> deleteProductCrossSellingAssignedProducts($id, $_response)

Delete a Product Cross Selling Assigned Products resource

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling_assigned_products
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductCrossSellingAssignedProducts($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->deleteProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling_assigned_products |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCrossSellingAssignedProducts**
> \Rundum\Shopware6\Model\InlineResponse200194 getProductCrossSellingAssignedProducts($id)

Detailed information about a Product Cross Selling Assigned Products resource

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling_assigned_products

try {
    $result = $apiInstance->getProductCrossSellingAssignedProducts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->getProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling_assigned_products |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200194**](../Model/InlineResponse200194.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCrossSellingAssignedProductsList**
> \Rundum\Shopware6\Model\InlineResponse200192 getProductCrossSellingAssignedProductsList($limit, $page, $query)

List with basic information of Product Cross Selling Assigned Products resources

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductCrossSellingAssignedProductsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->getProductCrossSellingAssignedProductsList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200192**](../Model/InlineResponse200192.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductCrossSellingAssignedProducts**
> \Rundum\Shopware6\Model\InlineResponse200194 updateProductCrossSellingAssignedProducts($id, $body, $_response)

Partially update information about a Product Cross Selling Assigned Products resource

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling_assigned_products
$body = new \Rundum\Shopware6\Model\Body129(); // \Rundum\Shopware6\Model\Body129 | Partially update information about a Product Cross Selling Assigned Products resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductCrossSellingAssignedProducts($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->updateProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling_assigned_products |
 **body** | [**\Rundum\Shopware6\Model\Body129**](../Model/Body129.md)| Partially update information about a Product Cross Selling Assigned Products resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200194**](../Model/InlineResponse200194.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductCrossSellingAssignedProducts**
> \Rundum\Shopware6\Model\InlineResponse200194 updateProductCrossSellingAssignedProducts($id, $body, $_response)

Partially update information about a Product Cross Selling Assigned Products resource

Available since: 6.2.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling_assigned_products
$body = new \Rundum\Shopware6\Model\Body129(); // \Rundum\Shopware6\Model\Body129 | Partially update information about a Product Cross Selling Assigned Products resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductCrossSellingAssignedProducts($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->updateProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling_assigned_products |
 **body** | [**\Rundum\Shopware6\Model\Body129**](../Model/Body129.md)| Partially update information about a Product Cross Selling Assigned Products resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200194**](../Model/InlineResponse200194.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

