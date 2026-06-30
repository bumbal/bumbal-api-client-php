# BumbalClient\StatusHistoryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveStatusHistoryActivity**](StatusHistoryApi.md#retrieveStatusHistoryActivity) | **POST** /status-history/activity | Retrieve the status history of an activity
[**retrieveStatusHistoryRoute**](StatusHistoryApi.md#retrieveStatusHistoryRoute) | **POST** /status-history/route | Retrieve the status history of a route


# **retrieveStatusHistoryActivity**
> \BumbalClient\Model\StatusHistoryListModel retrieveStatusHistoryActivity($arguments)

Retrieve the status history of an activity

Retrieve the status history of an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\StatusHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\StatusHistoryRequestModel(); // \BumbalClient\Model\StatusHistoryRequestModel | Request Arguments

try {
    $result = $apiInstance->retrieveStatusHistoryActivity($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusHistoryApi->retrieveStatusHistoryActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\StatusHistoryRequestModel**](../Model/StatusHistoryRequestModel.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\StatusHistoryListModel**](../Model/StatusHistoryListModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveStatusHistoryRoute**
> \BumbalClient\Model\StatusHistoryListModel retrieveStatusHistoryRoute($arguments)

Retrieve the status history of a route

Retrieve the status history of a route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\StatusHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\StatusHistoryRequestModel(); // \BumbalClient\Model\StatusHistoryRequestModel | Request Arguments

try {
    $result = $apiInstance->retrieveStatusHistoryRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusHistoryApi->retrieveStatusHistoryRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\StatusHistoryRequestModel**](../Model/StatusHistoryRequestModel.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\StatusHistoryListModel**](../Model/StatusHistoryListModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

