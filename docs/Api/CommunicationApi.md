# BumbalClient\CommunicationApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveActivityCommunication**](CommunicationApi.md#retrieveActivityCommunication) | **POST** /communication/retrieve-activity | Retrieve Activity
[**triggerMessageCommunication**](CommunicationApi.md#triggerMessageCommunication) | **POST** /communication/trigger-message | Trigger Message to Communication


# **retrieveActivityCommunication**
> \BumbalClient\Model\ApiResponse retrieveActivityCommunication($activity_id)

Retrieve Activity

Retrieve Activity from Communication

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

$api_instance = new BumbalClient\Api\CommunicationApi();
$activity_id = 56; // int | ActivityId

try {
    $result = $api_instance->retrieveActivityCommunication($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationApi->retrieveActivityCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ActivityId |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerMessageCommunication**
> \BumbalClient\Model\ApiResponse triggerMessageCommunication($body)

Trigger Message to Communication

Trigger Message to Communication

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

$api_instance = new BumbalClient\Api\CommunicationApi();
$body = new \BumbalClient\Model\CommunicationTriggerMessageModel(); // \BumbalClient\Model\CommunicationTriggerMessageModel | communication trigger message object

try {
    $result = $api_instance->triggerMessageCommunication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationApi->triggerMessageCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationTriggerMessageModel**](../Model/CommunicationTriggerMessageModel.md)| communication trigger message object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

