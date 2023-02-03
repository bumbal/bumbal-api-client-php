# BumbalClient\CommunicationdeliverymethodApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationDeliveryMethod**](CommunicationdeliverymethodApi.md#createCommunicationDeliveryMethod) | **POST** /communication-delivery-method/set | Create a communication delivery method


# **createCommunicationDeliveryMethod**
> \BumbalClient\Model\ApiResponse createCommunicationDeliveryMethod($body)

Create a communication delivery method

Create a communication delivery method

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

$api_instance = new BumbalClient\Api\CommunicationdeliverymethodApi();
$body = new \BumbalClient\Model\CommunicationDeliveryMethodModel(); // \BumbalClient\Model\CommunicationDeliveryMethodModel | CommunicationDeliveryMethod object

try {
    $result = $api_instance->createCommunicationDeliveryMethod($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationdeliverymethodApi->createCommunicationDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationDeliveryMethodModel**](../Model/CommunicationDeliveryMethodModel.md)| CommunicationDeliveryMethod object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

