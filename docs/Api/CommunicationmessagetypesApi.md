# BumbalClient\CommunicationmessagetypesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCommunicationMessageTypes**](CommunicationmessagetypesApi.md#listCommunicationMessageTypes) | **PUT** /communication-message-type/get-list | List all CommunicationMessageTypes


# **listCommunicationMessageTypes**
> \BumbalClient\Model\CommunicationMessageTypeListResponse listCommunicationMessageTypes()

List all CommunicationMessageTypes

List all CommunicationMessageTypes

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

$api_instance = new BumbalClient\Api\CommunicationmessagetypesApi();

try {
    $result = $api_instance->listCommunicationMessageTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmessagetypesApi->listCommunicationMessageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\CommunicationMessageTypeListResponse**](../Model/CommunicationMessageTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

