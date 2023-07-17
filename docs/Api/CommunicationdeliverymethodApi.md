# BumbalClient\CommunicationdeliverymethodApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationDeliveryMethod**](CommunicationdeliverymethodApi.md#createCommunicationDeliveryMethod) | **POST** /communication-delivery-method/set | Create a communication delivery method
[**deleteCommunicationDeliveryMethod**](CommunicationdeliverymethodApi.md#deleteCommunicationDeliveryMethod) | **DELETE** /communication-delivery-method/{communicationDeliveryMethodId} | Delete a communication delivery method
[**retrieveListCommunicationDeliveryMethod**](CommunicationdeliverymethodApi.md#retrieveListCommunicationDeliveryMethod) | **PUT** /communication-delivery-method | Retrieve List of communication delivery methods


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

# **deleteCommunicationDeliveryMethod**
> \BumbalClient\Model\ApiResponse deleteCommunicationDeliveryMethod($communication_delivery_method_id)

Delete a communication delivery method

Delete a communication delivery method

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
$communication_delivery_method_id = 789; // int | ID of the communication delivery method to delete

try {
    $result = $api_instance->deleteCommunicationDeliveryMethod($communication_delivery_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationdeliverymethodApi->deleteCommunicationDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_delivery_method_id** | **int**| ID of the communication delivery method to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationDeliveryMethod**
> \BumbalClient\Model\CommunicationDeliveryMethodListResponse retrieveListCommunicationDeliveryMethod($arguments)

Retrieve List of communication delivery methods

Retrieve List of communication delivery methods

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
$arguments = new \BumbalClient\Model\CommunicationDeliveryMethodRetrieveListArguments(); // \BumbalClient\Model\CommunicationDeliveryMethodRetrieveListArguments | communication delivery methods RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCommunicationDeliveryMethod($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationdeliverymethodApi->retrieveListCommunicationDeliveryMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationDeliveryMethodRetrieveListArguments**](../Model/CommunicationDeliveryMethodRetrieveListArguments.md)| communication delivery methods RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationDeliveryMethodListResponse**](../Model/CommunicationDeliveryMethodListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

