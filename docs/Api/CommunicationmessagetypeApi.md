# BumbalClient\CommunicationmessagetypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationMessageType**](CommunicationmessagetypeApi.md#createCommunicationMessageType) | **POST** /communication-message-type/set | Create a communicationmessagetype
[**deleteCommunicationMessageType**](CommunicationmessagetypeApi.md#deleteCommunicationMessageType) | **DELETE** /communication-message-type/{communicationMessageTypeId} | Delete a communication message type


# **createCommunicationMessageType**
> \BumbalClient\Model\ApiResponse createCommunicationMessageType($body)

Create a communicationmessagetype

Create a communication message type

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

$api_instance = new BumbalClient\Api\CommunicationmessagetypeApi();
$body = new \BumbalClient\Model\CommunicationMessageTypeModel(); // \BumbalClient\Model\CommunicationMessageTypeModel | CommunicationMessageType object

try {
    $result = $api_instance->createCommunicationMessageType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagetypeApi->createCommunicationMessageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationMessageTypeModel**](../Model/CommunicationMessageTypeModel.md)| CommunicationMessageType object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommunicationMessageType**
> \BumbalClient\Model\ApiResponse deleteCommunicationMessageType($communication_message_type_id)

Delete a communication message type

Delete a communication message type

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

$api_instance = new BumbalClient\Api\CommunicationmessagetypeApi();
$communication_message_type_id = 789; // int | ID of the communication message type to delete

try {
    $result = $api_instance->deleteCommunicationMessageType($communication_message_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagetypeApi->deleteCommunicationMessageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_message_type_id** | **int**| ID of the communication message type to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

