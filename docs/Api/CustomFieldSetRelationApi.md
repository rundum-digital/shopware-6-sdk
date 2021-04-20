# Rundum\Shopware6\CustomFieldSetRelationApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomFieldSetRelation**](CustomFieldSetRelationApi.md#createcustomfieldsetrelation) | **POST** /custom-field-set-relation | Create a new Custom Field Set Relation resources
[**deleteCustomFieldSetRelation**](CustomFieldSetRelationApi.md#deletecustomfieldsetrelation) | **DELETE** /custom-field-set-relation/{id} | Delete a Custom Field Set Relation resource
[**getCustomFieldSetRelation**](CustomFieldSetRelationApi.md#getcustomfieldsetrelation) | **GET** /custom-field-set-relation/{id} | Detailed information about a Custom Field Set Relation resource
[**getCustomFieldSetRelationList**](CustomFieldSetRelationApi.md#getcustomfieldsetrelationlist) | **GET** /custom-field-set-relation | List with basic information of Custom Field Set Relation resources
[**updateCustomFieldSetRelation**](CustomFieldSetRelationApi.md#updatecustomfieldsetrelation) | **PATCH** /custom-field-set-relation/{id} | Partially update information about a Custom Field Set Relation resource

# **createCustomFieldSetRelation**
> \Rundum\Shopware6\Model\InlineResponse20044 createCustomFieldSetRelation($body, $_response)

Create a new Custom Field Set Relation resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body28(); // \Rundum\Shopware6\Model\Body28 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCustomFieldSetRelation($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->createCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body28**](../Model/Body28.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomFieldSetRelation**
> \Rundum\Shopware6\Model\InlineResponse20044 createCustomFieldSetRelation($body, $_response)

Create a new Custom Field Set Relation resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body28(); // \Rundum\Shopware6\Model\Body28 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCustomFieldSetRelation($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->createCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body28**](../Model/Body28.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomFieldSetRelation**
> deleteCustomFieldSetRelation($id, $_response)

Delete a Custom Field Set Relation resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCustomFieldSetRelation($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->deleteCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldSetRelation**
> \Rundum\Shopware6\Model\InlineResponse20044 getCustomFieldSetRelation($id)

Detailed information about a Custom Field Set Relation resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation

try {
    $result = $apiInstance->getCustomFieldSetRelation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->getCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldSetRelationList**
> \Rundum\Shopware6\Model\InlineResponse20042 getCustomFieldSetRelationList($limit, $page, $query)

List with basic information of Custom Field Set Relation resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCustomFieldSetRelationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->getCustomFieldSetRelationList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldSetRelation**
> \Rundum\Shopware6\Model\InlineResponse20044 updateCustomFieldSetRelation($id, $body, $_response)

Partially update information about a Custom Field Set Relation resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation
$body = new \Rundum\Shopware6\Model\Body29(); // \Rundum\Shopware6\Model\Body29 | Partially update information about a Custom Field Set Relation resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCustomFieldSetRelation($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->updateCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |
 **body** | [**\Rundum\Shopware6\Model\Body29**](../Model/Body29.md)| Partially update information about a Custom Field Set Relation resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldSetRelation**
> \Rundum\Shopware6\Model\InlineResponse20044 updateCustomFieldSetRelation($id, $body, $_response)

Partially update information about a Custom Field Set Relation resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation
$body = new \Rundum\Shopware6\Model\Body29(); // \Rundum\Shopware6\Model\Body29 | Partially update information about a Custom Field Set Relation resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCustomFieldSetRelation($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->updateCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |
 **body** | [**\Rundum\Shopware6\Model\Body29**](../Model/Body29.md)| Partially update information about a Custom Field Set Relation resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

