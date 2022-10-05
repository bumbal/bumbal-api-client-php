# BumbalClient\StatushistoryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveStatusHistoryActivity**](StatushistoryApi.md#retrieveStatusHistoryActivity) | **POST** /status-history/activity | Retrieve the status history of an activity
[**retrieveStatusHistoryRoute**](StatushistoryApi.md#retrieveStatusHistoryRoute) | **POST** /status-history/route | Retrieve the status history of a route


# **retrieveStatusHistoryActivity**
> \BumbalClient\Model\StatusHistoryListModel retrieveStatusHistoryActivity($arguments)

Retrieve the status history of an activity

Retrieve the status history of an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BumbalClient\Api\StatushistoryApi();
$arguments = new \BumbalClient\Model\StatusHistoryRequestModel(); // \BumbalClient\Model\StatusHistoryRequestModel | Request Arguments

try {
    $result = $api_instance->retrieveStatusHistoryActivity($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatushistoryApi->retrieveStatusHistoryActivity: ', $e->getMessage(), PHP_EOL;
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
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BumbalClient\Api\StatushistoryApi();
$arguments = new \BumbalClient\Model\StatusHistoryRequestModel(); // \BumbalClient\Model\StatusHistoryRequestModel | Request Arguments

try {
    $result = $api_instance->retrieveStatusHistoryRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatushistoryApi->retrieveStatusHistoryRoute: ', $e->getMessage(), PHP_EOL;
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

