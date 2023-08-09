# BumbalClient\CommunicationmessagetypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCommunicationMessageTypes**](CommunicationmessagetypeApi.md#listCommunicationMessageTypes) | **PUT** /communication-message-type | List all CommunicationMessageTypes
[**retrieveCommunicationMessageType**](CommunicationmessagetypeApi.md#retrieveCommunicationMessageType) | **GET** /communication-message-type/{communicationMessageTypeID} | Retrieve a communication message type


# **listCommunicationMessageTypes**
> \BumbalClient\Model\CommunicationMessageTypeListResponse listCommunicationMessageTypes($arguments)

List all CommunicationMessageTypes

List all communication message types

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
$arguments = new \BumbalClient\Model\CommunicationMessageTypeRetrieveListArguments(); // \BumbalClient\Model\CommunicationMessageTypeRetrieveListArguments | Communication Message Type RetrieveList Arguments

try {
    $result = $api_instance->listCommunicationMessageTypes($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagetypeApi->listCommunicationMessageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationMessageTypeRetrieveListArguments**](../Model/CommunicationMessageTypeRetrieveListArguments.md)| Communication Message Type RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationMessageTypeListResponse**](../Model/CommunicationMessageTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCommunicationMessageType**
> \BumbalClient\Model\CommunicationMessageTypeModel retrieveCommunicationMessageType($communication_message_type_id)

Retrieve a communication message type

Retrieve a communication message type

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
$communication_message_type_id = 789; // int | ID of communication message type to return

try {
    $result = $api_instance->retrieveCommunicationMessageType($communication_message_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagetypeApi->retrieveCommunicationMessageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_message_type_id** | **int**| ID of communication message type to return |

### Return type

[**\BumbalClient\Model\CommunicationMessageTypeModel**](../Model/CommunicationMessageTypeModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

