# BumbalClient\CommunicationMessageApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveCommunicationMessage**](CommunicationMessageApi.md#retrieveCommunicationMessage) | **GET** /communication-message/{communicationMessageID} | Retrieve a communication message
[**retrieveListCommunicationMessages**](CommunicationMessageApi.md#retrieveListCommunicationMessages) | **PUT** /communication-message | Retrieve List of communication messages


# **retrieveCommunicationMessage**
> \BumbalClient\Model\CommunicationMessageModel retrieveCommunicationMessage($communication_message_id)

Retrieve a communication message

Retrieve a communication message

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

$apiInstance = new BumbalClient\Api\CommunicationMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_message_id = 789; // int | ID of template to return

try {
    $result = $apiInstance->retrieveCommunicationMessage($communication_message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationMessageApi->retrieveCommunicationMessage: ', $e->getMessage(), PHP_EOL;
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
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\CommunicationMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\CommunicationMessageRetrieveListArguments(); // \BumbalClient\Model\CommunicationMessageRetrieveListArguments | Template RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListCommunicationMessages($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationMessageApi->retrieveListCommunicationMessages: ', $e->getMessage(), PHP_EOL;
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

