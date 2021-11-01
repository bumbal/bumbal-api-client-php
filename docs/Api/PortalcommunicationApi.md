# BumbalClient\PortalcommunicationApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveActivityByIdCommunication**](PortalcommunicationApi.md#retrieveActivityByIdCommunication) | **GET** /portal-communication/retrieve-activity-by-id/{activityId} | Retrieve an activity by ID
[**triggerMessageCommunicationByMessageType**](PortalcommunicationApi.md#triggerMessageCommunicationByMessageType) | **POST** /portal-communication/trigger-message-by-message-type | Trigger Message to Communication by Message Type


# **retrieveActivityByIdCommunication**
> \BumbalClient\Model\ApiResponse retrieveActivityByIdCommunication($activity_id)

Retrieve an activity by ID

Retrieve an activity by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalcommunicationApi();
$activity_id = 789; // int | ID of activity to retrieve

try {
    $result = $api_instance->retrieveActivityByIdCommunication($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalcommunicationApi->retrieveActivityByIdCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to retrieve |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerMessageCommunicationByMessageType**
> \BumbalClient\Model\ApiResponse triggerMessageCommunicationByMessageType($body)

Trigger Message to Communication by Message Type

Trigger Message to Communication by Message Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalcommunicationApi();
$body = new \BumbalClient\Model\CommunicationTriggerMessageModel(); // \BumbalClient\Model\CommunicationTriggerMessageModel | communication trigger message object

try {
    $result = $api_instance->triggerMessageCommunicationByMessageType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalcommunicationApi->triggerMessageCommunicationByMessageType: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

