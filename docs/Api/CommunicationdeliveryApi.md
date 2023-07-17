# BumbalClient\CommunicationdeliveryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveCommunicationDeliveryMethod**](CommunicationdeliveryApi.md#retrieveCommunicationDeliveryMethod) | **GET** /communication-delivery-method/{communicationDeliveryMethodId} | Retrieve a communication delivery method


# **retrieveCommunicationDeliveryMethod**
> \BumbalClient\Model\CommunicationDeliveryMethodModel retrieveCommunicationDeliveryMethod($communication_template_id)

Retrieve a communication delivery method

Retrieve a communication delivery method

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

$api_instance = new BumbalClient\Api\CommunicationdeliveryApi();
$communication_template_id = 789; // int | ID of communication delivery to return

try {
    $result = $api_instance->retrieveCommunicationDeliveryMethod($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationdeliveryApi->retrieveCommunicationDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_template_id** | **int**| ID of communication delivery to return |

### Return type

[**\BumbalClient\Model\CommunicationDeliveryMethodModel**](../Model/CommunicationDeliveryMethodModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

