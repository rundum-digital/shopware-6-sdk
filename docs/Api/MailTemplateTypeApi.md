# Rundum\Shopware6\MailTemplateTypeApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMailTemplateType**](MailTemplateTypeApi.md#createmailtemplatetype) | **POST** /mail-template-type | Create a new Mail Template Type resources
[**deleteMailTemplateType**](MailTemplateTypeApi.md#deletemailtemplatetype) | **DELETE** /mail-template-type/{id} | Delete a Mail Template Type resource
[**getMailTemplateType**](MailTemplateTypeApi.md#getmailtemplatetype) | **GET** /mail-template-type/{id} | Detailed information about a Mail Template Type resource
[**getMailTemplateTypeList**](MailTemplateTypeApi.md#getmailtemplatetypelist) | **GET** /mail-template-type | List with basic information of Mail Template Type resources
[**updateMailTemplateType**](MailTemplateTypeApi.md#updatemailtemplatetype) | **PATCH** /mail-template-type/{id} | Partially update information about a Mail Template Type resource

# **createMailTemplateType**
> \Rundum\Shopware6\Model\InlineResponse200116 createMailTemplateType($body, $_response)

Create a new Mail Template Type resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body76(); // \Rundum\Shopware6\Model\Body76 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailTemplateType($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->createMailTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body76**](../Model/Body76.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMailTemplateType**
> \Rundum\Shopware6\Model\InlineResponse200116 createMailTemplateType($body, $_response)

Create a new Mail Template Type resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body76(); // \Rundum\Shopware6\Model\Body76 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailTemplateType($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->createMailTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body76**](../Model/Body76.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailTemplateType**
> deleteMailTemplateType($id, $_response)

Delete a Mail Template Type resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_type
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMailTemplateType($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->deleteMailTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_type |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTemplateType**
> \Rundum\Shopware6\Model\InlineResponse200116 getMailTemplateType($id)

Detailed information about a Mail Template Type resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_type

try {
    $result = $apiInstance->getMailTemplateType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->getMailTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_type |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTemplateTypeList**
> \Rundum\Shopware6\Model\InlineResponse200114 getMailTemplateTypeList($limit, $page, $query)

List with basic information of Mail Template Type resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMailTemplateTypeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->getMailTemplateTypeList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailTemplateType**
> \Rundum\Shopware6\Model\InlineResponse200116 updateMailTemplateType($id, $body, $_response)

Partially update information about a Mail Template Type resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_type
$body = new \Rundum\Shopware6\Model\Body77(); // \Rundum\Shopware6\Model\Body77 | Partially update information about a Mail Template Type resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailTemplateType($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->updateMailTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_type |
 **body** | [**\Rundum\Shopware6\Model\Body77**](../Model/Body77.md)| Partially update information about a Mail Template Type resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailTemplateType**
> \Rundum\Shopware6\Model\InlineResponse200116 updateMailTemplateType($id, $body, $_response)

Partially update information about a Mail Template Type resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MailTemplateTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_type
$body = new \Rundum\Shopware6\Model\Body77(); // \Rundum\Shopware6\Model\Body77 | Partially update information about a Mail Template Type resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailTemplateType($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateTypeApi->updateMailTemplateType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_type |
 **body** | [**\Rundum\Shopware6\Model\Body77**](../Model/Body77.md)| Partially update information about a Mail Template Type resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200116**](../Model/InlineResponse200116.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

