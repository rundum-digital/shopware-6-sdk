# Rundum\Shopware6\StateMachineHistoryApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStateMachineHistory**](StateMachineHistoryApi.md#createstatemachinehistory) | **POST** /state-machine-history | Create a new State Machine History resources
[**deleteStateMachineHistory**](StateMachineHistoryApi.md#deletestatemachinehistory) | **DELETE** /state-machine-history/{id} | Delete a State Machine History resource
[**getStateMachineHistory**](StateMachineHistoryApi.md#getstatemachinehistory) | **GET** /state-machine-history/{id} | Detailed information about a State Machine History resource
[**getStateMachineHistoryList**](StateMachineHistoryApi.md#getstatemachinehistorylist) | **GET** /state-machine-history | List with basic information of State Machine History resources
[**updateStateMachineHistory**](StateMachineHistoryApi.md#updatestatemachinehistory) | **PATCH** /state-machine-history/{id} | Partially update information about a State Machine History resource

# **createStateMachineHistory**
> \Rundum\Shopware6\Model\InlineResponse200302 createStateMachineHistory($body, $_response)

Create a new State Machine History resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body200(); // \Rundum\Shopware6\Model\Body200 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createStateMachineHistory($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->createStateMachineHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body200**](../Model/Body200.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStateMachineHistory**
> \Rundum\Shopware6\Model\InlineResponse200302 createStateMachineHistory($body, $_response)

Create a new State Machine History resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body200(); // \Rundum\Shopware6\Model\Body200 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createStateMachineHistory($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->createStateMachineHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body200**](../Model/Body200.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStateMachineHistory**
> deleteStateMachineHistory($id, $_response)

Delete a State Machine History resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_history
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteStateMachineHistory($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->deleteStateMachineHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_history |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateMachineHistory**
> \Rundum\Shopware6\Model\InlineResponse200302 getStateMachineHistory($id)

Detailed information about a State Machine History resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_history

try {
    $result = $apiInstance->getStateMachineHistory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->getStateMachineHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_history |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateMachineHistoryList**
> \Rundum\Shopware6\Model\InlineResponse200300 getStateMachineHistoryList($limit, $page, $query)

List with basic information of State Machine History resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getStateMachineHistoryList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->getStateMachineHistoryList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateMachineHistory**
> \Rundum\Shopware6\Model\InlineResponse200302 updateStateMachineHistory($id, $body, $_response)

Partially update information about a State Machine History resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_history
$body = new \Rundum\Shopware6\Model\Body201(); // \Rundum\Shopware6\Model\Body201 | Partially update information about a State Machine History resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateStateMachineHistory($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->updateStateMachineHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_history |
 **body** | [**\Rundum\Shopware6\Model\Body201**](../Model/Body201.md)| Partially update information about a State Machine History resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateMachineHistory**
> \Rundum\Shopware6\Model\InlineResponse200302 updateStateMachineHistory($id, $body, $_response)

Partially update information about a State Machine History resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\StateMachineHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_history
$body = new \Rundum\Shopware6\Model\Body201(); // \Rundum\Shopware6\Model\Body201 | Partially update information about a State Machine History resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateStateMachineHistory($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineHistoryApi->updateStateMachineHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_history |
 **body** | [**\Rundum\Shopware6\Model\Body201**](../Model/Body201.md)| Partially update information about a State Machine History resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200302**](../Model/InlineResponse200302.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

