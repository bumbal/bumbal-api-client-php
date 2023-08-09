# BumbalClient\CommunicationmessagehistoryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationMessageHistory**](CommunicationmessagehistoryApi.md#createCommunicationMessageHistory) | **POST** /communication-message-history/set | Create communication message history
[**retrieveListCommunicationMessageHistories**](CommunicationmessagehistoryApi.md#retrieveListCommunicationMessageHistories) | **PUT** /communication-message-history | Retrieve list of communication message histories


# **createCommunicationMessageHistory**
> \BumbalClient\Model\ApiResponse createCommunicationMessageHistory($body)

Create communication message history

Create communication message history

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

$api_instance = new BumbalClient\Api\CommunicationmessagehistoryApi();
$body = new \BumbalClient\Model\CommunicationMappingModel(); // \BumbalClient\Model\CommunicationMappingModel | Mapping object

try {
    $result = $api_instance->createCommunicationMessageHistory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagehistoryApi->createCommunicationMessageHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationMappingModel**](../Model/CommunicationMappingModel.md)| Mapping object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationMessageHistories**
> \BumbalClient\Model\CommunicationMessageHistoryListResponse retrieveListCommunicationMessageHistories($arguments)

Retrieve list of communication message histories

Retrieve list of communication message histories

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

$api_instance = new BumbalClient\Api\CommunicationmessagehistoryApi();
$arguments = new \BumbalClient\Model\CommunicationMessageHistoryRetrieveListArguments(); // \BumbalClient\Model\CommunicationMessageHistoryRetrieveListArguments | Communication message history retrieve list arguments

try {
    $result = $api_instance->retrieveListCommunicationMessageHistories($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagehistoryApi->retrieveListCommunicationMessageHistories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationMessageHistoryRetrieveListArguments**](../Model/CommunicationMessageHistoryRetrieveListArguments.md)| Communication message history retrieve list arguments |

### Return type

[**\BumbalClient\Model\CommunicationMessageHistoryListResponse**](../Model/CommunicationMessageHistoryListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

