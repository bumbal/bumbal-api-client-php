# BumbalClient\CommunicationmessageApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationMessage**](CommunicationmessageApi.md#createCommunicationMessage) | **POST** /communication-message/set | Create a communicationmessage
[**deleteCommunicationMessage**](CommunicationmessageApi.md#deleteCommunicationMessage) | **DELETE** /communication-message/{communicationMessageId} | Delete a communication message
[**retrieveCommunicationMessage**](CommunicationmessageApi.md#retrieveCommunicationMessage) | **GET** /communication-message/{communicationMessageId} | Retrieve a communicationmessage
[**retrieveListCommunicationMessages**](CommunicationmessageApi.md#retrieveListCommunicationMessages) | **PUT** /communication-message | Retrieve List of communication messages


# **createCommunicationMessage**
> \BumbalClient\Model\ApiResponse createCommunicationMessage($body)

Create a communicationmessage

Create a communication message

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
$body = new \BumbalClient\Model\CommunicationMessageModel(); // \BumbalClient\Model\CommunicationMessageModel | CommunicationMessage object

try {
    $result = $api_instance->createCommunicationMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessageApi->createCommunicationMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationMessageModel**](../Model/CommunicationMessageModel.md)| CommunicationMessage object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommunicationMessage**
> \BumbalClient\Model\ApiResponse deleteCommunicationMessage($communication_message_id)

Delete a communication message

Delete a communication message

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
$communication_message_id = 789; // int | ID of the communication message to delete

try {
    $result = $api_instance->deleteCommunicationMessage($communication_message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessageApi->deleteCommunicationMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_message_id** | **int**| ID of the communication message to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCommunicationMessage**
> \BumbalClient\Model\CommunicationMessageModel retrieveCommunicationMessage($communication_message_id)

Retrieve a communicationmessage

Retrieve a communicationmessage

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

Retrieve List of communication messages

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

