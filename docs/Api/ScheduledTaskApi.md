# Rundum\Shopware6\ScheduledTaskApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduledTask**](ScheduledTaskApi.md#createscheduledtask) | **POST** /scheduled-task | Create a new Scheduled Task resources
[**deleteScheduledTask**](ScheduledTaskApi.md#deletescheduledtask) | **DELETE** /scheduled-task/{id} | Delete a Scheduled Task resource
[**getScheduledTask**](ScheduledTaskApi.md#getscheduledtask) | **GET** /scheduled-task/{id} | Detailed information about a Scheduled Task resource
[**getScheduledTaskList**](ScheduledTaskApi.md#getscheduledtasklist) | **GET** /scheduled-task | List with basic information of Scheduled Task resources
[**updateScheduledTask**](ScheduledTaskApi.md#updatescheduledtask) | **PATCH** /scheduled-task/{id} | Partially update information about a Scheduled Task resource

# **createScheduledTask**
> \Rundum\Shopware6\Model\InlineResponse200278 createScheduledTask($body, $_response)

Create a new Scheduled Task resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body184(); // \Rundum\Shopware6\Model\Body184 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createScheduledTask($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->createScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body184**](../Model/Body184.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200278**](../Model/InlineResponse200278.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createScheduledTask**
> \Rundum\Shopware6\Model\InlineResponse200278 createScheduledTask($body, $_response)

Create a new Scheduled Task resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body184(); // \Rundum\Shopware6\Model\Body184 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createScheduledTask($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->createScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body184**](../Model/Body184.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200278**](../Model/InlineResponse200278.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledTask**
> deleteScheduledTask($id, $_response)

Delete a Scheduled Task resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteScheduledTask($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->deleteScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTask**
> \Rundum\Shopware6\Model\InlineResponse200278 getScheduledTask($id)

Detailed information about a Scheduled Task resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task

try {
    $result = $apiInstance->getScheduledTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->getScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200278**](../Model/InlineResponse200278.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTaskList**
> \Rundum\Shopware6\Model\InlineResponse200276 getScheduledTaskList($limit, $page, $query)

List with basic information of Scheduled Task resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getScheduledTaskList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->getScheduledTaskList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200276**](../Model/InlineResponse200276.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScheduledTask**
> \Rundum\Shopware6\Model\InlineResponse200278 updateScheduledTask($id, $body, $_response)

Partially update information about a Scheduled Task resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task
$body = new \Rundum\Shopware6\Model\Body185(); // \Rundum\Shopware6\Model\Body185 | Partially update information about a Scheduled Task resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateScheduledTask($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->updateScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |
 **body** | [**\Rundum\Shopware6\Model\Body185**](../Model/Body185.md)| Partially update information about a Scheduled Task resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200278**](../Model/InlineResponse200278.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScheduledTask**
> \Rundum\Shopware6\Model\InlineResponse200278 updateScheduledTask($id, $body, $_response)

Partially update information about a Scheduled Task resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task
$body = new \Rundum\Shopware6\Model\Body185(); // \Rundum\Shopware6\Model\Body185 | Partially update information about a Scheduled Task resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateScheduledTask($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->updateScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |
 **body** | [**\Rundum\Shopware6\Model\Body185**](../Model/Body185.md)| Partially update information about a Scheduled Task resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200278**](../Model/InlineResponse200278.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

