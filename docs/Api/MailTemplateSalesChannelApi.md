# Rundum\Shopware6\MailTemplateSalesChannelApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#createmailtemplatesaleschannel) | **POST** /mail-template-sales-channel | Create a new Mail Template Sales Channel resources
[**deleteMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#deletemailtemplatesaleschannel) | **DELETE** /mail-template-sales-channel/{id} | Delete a Mail Template Sales Channel resource
[**getMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#getmailtemplatesaleschannel) | **GET** /mail-template-sales-channel/{id} | Detailed information about a Mail Template Sales Channel resource
[**getMailTemplateSalesChannelList**](MailTemplateSalesChannelApi.md#getmailtemplatesaleschannellist) | **GET** /mail-template-sales-channel | List with basic information of Mail Template Sales Channel resources
[**updateMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#updatemailtemplatesaleschannel) | **PATCH** /mail-template-sales-channel/{id} | Partially update information about a Mail Template Sales Channel resource

# **createMailTemplateSalesChannel**
> \Rundum\Shopware6\Model\InlineResponse200113 createMailTemplateSalesChannel($body, $_response)

Create a new Mail Template Sales Channel resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body74(); // \Rundum\Shopware6\Model\Body74 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailTemplateSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->createMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body74**](../Model/Body74.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMailTemplateSalesChannel**
> \Rundum\Shopware6\Model\InlineResponse200113 createMailTemplateSalesChannel($body, $_response)

Create a new Mail Template Sales Channel resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body74(); // \Rundum\Shopware6\Model\Body74 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailTemplateSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->createMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body74**](../Model/Body74.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailTemplateSalesChannel**
> deleteMailTemplateSalesChannel($id, $_response)

Delete a Mail Template Sales Channel resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMailTemplateSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->deleteMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTemplateSalesChannel**
> \Rundum\Shopware6\Model\InlineResponse200113 getMailTemplateSalesChannel($id)

Detailed information about a Mail Template Sales Channel resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel

try {
    $result = $apiInstance->getMailTemplateSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->getMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTemplateSalesChannelList**
> \Rundum\Shopware6\Model\InlineResponse200111 getMailTemplateSalesChannelList($limit, $page, $query)

List with basic information of Mail Template Sales Channel resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMailTemplateSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->getMailTemplateSalesChannelList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200111**](../Model/InlineResponse200111.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailTemplateSalesChannel**
> \Rundum\Shopware6\Model\InlineResponse200113 updateMailTemplateSalesChannel($id, $body, $_response)

Partially update information about a Mail Template Sales Channel resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel
$body = new \Rundum\Shopware6\Model\Body75(); // \Rundum\Shopware6\Model\Body75 | Partially update information about a Mail Template Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailTemplateSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->updateMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |
 **body** | [**\Rundum\Shopware6\Model\Body75**](../Model/Body75.md)| Partially update information about a Mail Template Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailTemplateSalesChannel**
> \Rundum\Shopware6\Model\InlineResponse200113 updateMailTemplateSalesChannel($id, $body, $_response)

Partially update information about a Mail Template Sales Channel resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel
$body = new \Rundum\Shopware6\Model\Body75(); // \Rundum\Shopware6\Model\Body75 | Partially update information about a Mail Template Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailTemplateSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->updateMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |
 **body** | [**\Rundum\Shopware6\Model\Body75**](../Model/Body75.md)| Partially update information about a Mail Template Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200113**](../Model/InlineResponse200113.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

