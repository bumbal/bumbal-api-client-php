# BumbalClient\CommunicationmessageApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveCommunicationMessage**](CommunicationmessageApi.md#retrieveCommunicationMessage) | **GET** /communication-message/{communicationMessageID} | Retrieve a communication message
[**retrieveListCommunicationMessages**](CommunicationmessageApi.md#retrieveListCommunicationMessages) | **PUT** /communication-message | Retrieve List of communication messages


# **retrieveCommunicationMessage**
> \BumbalClient\Model\CommunicationMessageModel retrieveCommunicationMessage($communication_message_id)

Retrieve a communication message

Retrieve a communication message

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

$api_instance = new BumbalClient\Api\CommunicationmessageApi();
$communication_message_id = 789; // int | ID of template to return

try {
    $result = $api_instance->retrieveCommunicationMessage($communication_message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessageApi->retrieveCommunicationMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_message_id** | **int**| ID of template to return |

### Return type

[**\BumbalClient\Model\CommunicationMessageModel**](../Model/CommunicationMessageModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationMessages**
> \BumbalClient\Model\CommunicationMessageListResponse retrieveListCommunicationMessages($arguments)

Retrieve List of communication messages

Retrieve list of communication messages

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

$api_instance = new BumbalClient\Api\CommunicationmessageApi();
$arguments = new \BumbalClient\Model\CommunicationMessageRetrieveListArguments(); // \BumbalClient\Model\CommunicationMessageRetrieveListArguments | Template RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCommunicationMessages($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessageApi->retrieveListCommunicationMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationMessageRetrieveListArguments**](../Model/CommunicationMessageRetrieveListArguments.md)| Template RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationMessageListResponse**](../Model/CommunicationMessageListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

