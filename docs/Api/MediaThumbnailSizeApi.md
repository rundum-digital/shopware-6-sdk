# Rundum\Shopware6\MediaThumbnailSizeApi

All URIs are relative to *http://shopware6.local/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaThumbnailSize**](MediaThumbnailSizeApi.md#createmediathumbnailsize) | **POST** /media-thumbnail-size | Create a new Media Thumbnail Size resources
[**deleteMediaThumbnailSize**](MediaThumbnailSizeApi.md#deletemediathumbnailsize) | **DELETE** /media-thumbnail-size/{id} | Delete a Media Thumbnail Size resource
[**getMediaThumbnailSize**](MediaThumbnailSizeApi.md#getmediathumbnailsize) | **GET** /media-thumbnail-size/{id} | Detailed information about a Media Thumbnail Size resource
[**getMediaThumbnailSizeList**](MediaThumbnailSizeApi.md#getmediathumbnailsizelist) | **GET** /media-thumbnail-size | List with basic information of Media Thumbnail Size resources
[**updateMediaThumbnailSize**](MediaThumbnailSizeApi.md#updatemediathumbnailsize) | **PATCH** /media-thumbnail-size/{id} | Partially update information about a Media Thumbnail Size resource

# **createMediaThumbnailSize**
> \Rundum\Shopware6\Model\InlineResponse200137 createMediaThumbnailSize($body, $_response)

Create a new Media Thumbnail Size resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body90(); // \Rundum\Shopware6\Model\Body90 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMediaThumbnailSize($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->createMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body90**](../Model/Body90.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMediaThumbnailSize**
> \Rundum\Shopware6\Model\InlineResponse200137 createMediaThumbnailSize($body, $_response)

Create a new Media Thumbnail Size resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Rundum\Shopware6\Model\Body90(); // \Rundum\Shopware6\Model\Body90 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMediaThumbnailSize($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->createMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Rundum\Shopware6\Model\Body90**](../Model/Body90.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMediaThumbnailSize**
> deleteMediaThumbnailSize($id, $_response)

Delete a Media Thumbnail Size resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_thumbnail_size
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMediaThumbnailSize($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->deleteMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_thumbnail_size |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaThumbnailSize**
> \Rundum\Shopware6\Model\InlineResponse200137 getMediaThumbnailSize($id)

Detailed information about a Media Thumbnail Size resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_thumbnail_size

try {
    $result = $apiInstance->getMediaThumbnailSize($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->getMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_thumbnail_size |

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaThumbnailSizeList**
> \Rundum\Shopware6\Model\InlineResponse200135 getMediaThumbnailSizeList($limit, $page, $query)

List with basic information of Media Thumbnail Size resources

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMediaThumbnailSizeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->getMediaThumbnailSizeList: ', $e->getMessage(), PHP_EOL;
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

[**\Rundum\Shopware6\Model\InlineResponse200135**](../Model/InlineResponse200135.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMediaThumbnailSize**
> \Rundum\Shopware6\Model\InlineResponse200137 updateMediaThumbnailSize($id, $body, $_response)

Partially update information about a Media Thumbnail Size resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_thumbnail_size
$body = new \Rundum\Shopware6\Model\Body91(); // \Rundum\Shopware6\Model\Body91 | Partially update information about a Media Thumbnail Size resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMediaThumbnailSize($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->updateMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_thumbnail_size |
 **body** | [**\Rundum\Shopware6\Model\Body91**](../Model/Body91.md)| Partially update information about a Media Thumbnail Size resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMediaThumbnailSize**
> \Rundum\Shopware6\Model\InlineResponse200137 updateMediaThumbnailSize($id, $body, $_response)

Partially update information about a Media Thumbnail Size resource

Available since: 6.0.0.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oAuth
$config = Rundum\Shopware6\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Rundum\Shopware6\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_thumbnail_size
$body = new \Rundum\Shopware6\Model\Body91(); // \Rundum\Shopware6\Model\Body91 | Partially update information about a Media Thumbnail Size resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMediaThumbnailSize($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->updateMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_thumbnail_size |
 **body** | [**\Rundum\Shopware6\Model\Body91**](../Model/Body91.md)| Partially update information about a Media Thumbnail Size resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Rundum\Shopware6\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

