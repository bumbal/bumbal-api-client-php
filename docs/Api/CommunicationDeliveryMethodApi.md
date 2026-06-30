# BumbalClient\CommunicationDeliveryMethodApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveCommunicationDeliveryMethod**](CommunicationDeliveryMethodApi.md#retrieveCommunicationDeliveryMethod) | **GET** /communication-delivery-method/{communicationDeliveryMethodID} | Retrieve a communication delivery method
[**retrieveListCommunicationDeliveryMethod**](CommunicationDeliveryMethodApi.md#retrieveListCommunicationDeliveryMethod) | **PUT** /communication-delivery-method | Retrieve List of communication delivery methods


# **retrieveCommunicationDeliveryMethod**
> \BumbalClient\Model\CommunicationDeliveryMethodModel retrieveCommunicationDeliveryMethod($communication_delivery_method_id)

Retrieve a communication delivery method

Retrieve a communication delivery method

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

$apiInstance = new BumbalClient\Api\CommunicationDeliveryMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_delivery_method_id = 789; // int | ID of communication delivery method to return

try {
    $result = $apiInstance->retrieveCommunicationDeliveryMethod($communication_delivery_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationDeliveryMethodApi->retrieveCommunicationDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_delivery_method_id** | **int**| ID of communication delivery method to return |

### Return type

[**\BumbalClient\Model\CommunicationDeliveryMethodModel**](../Model/CommunicationDeliveryMethodModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationDeliveryMethod**
> \BumbalClient\Model\CommunicationDeliveryMethodListResponse retrieveListCommunicationDeliveryMethod($arguments)

Retrieve List of communication delivery methods

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

$apiInstance = new BumbalClient\Api\CommunicationDeliveryMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\CommunicationDeliveryMethodRetrieveListArguments(); // \BumbalClient\Model\CommunicationDeliveryMethodRetrieveListArguments | Communication delivery methods RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListCommunicationDeliveryMethod($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationDeliveryMethodApi->retrieveListCommunicationDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationDeliveryMethodRetrieveListArguments**](../Model/CommunicationDeliveryMethodRetrieveListArguments.md)| Communication delivery methods RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationDeliveryMethodListResponse**](../Model/CommunicationDeliveryMethodListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

