# BumbalClient\CommunicationmappingApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationMapping**](CommunicationmappingApi.md#createCommunicationMapping) | **POST** /communication-mapping/set | Create or update a communication mapping
[**deleteCommunicationMapping**](CommunicationmappingApi.md#deleteCommunicationMapping) | **DELETE** /communication-mapping/{communicationMappingId} | Delete a communication mapping
[**retrieveCommunicationMapping**](CommunicationmappingApi.md#retrieveCommunicationMapping) | **GET** /communication-mapping/{communicationMappingId} | Retrieve a communication mapping
[**retrieveListCommunicationMapping**](CommunicationmappingApi.md#retrieveListCommunicationMapping) | **PUT** /communication-mapping | Retrieve list of communication mappings


# **createCommunicationMapping**
> \BumbalClient\Model\ApiResponse createCommunicationMapping($body)

Create or update a communication mapping

Create a communication mapping

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

$api_instance = new BumbalClient\Api\CommunicationmappingApi();
$body = new \BumbalClient\Model\CommunicationMappingModel(); // \BumbalClient\Model\CommunicationMappingModel | Mapping object

try {
    $result = $api_instance->createCommunicationMapping($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmappingApi->createCommunicationMapping: ', $e->getMessage(), PHP_EOL;
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

# **deleteCommunicationMapping**
> \BumbalClient\Model\ApiResponse deleteCommunicationMapping($communication_mapping_id)

Delete a communication mapping

Delete a communication mapping

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

$api_instance = new BumbalClient\Api\CommunicationmappingApi();
$communication_mapping_id = 789; // int | ID of the communication mapping to delete

try {
    $result = $api_instance->deleteCommunicationMapping($communication_mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmappingApi->deleteCommunicationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_mapping_id** | **int**| ID of the communication mapping to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCommunicationMapping**
> \BumbalClient\Model\CommunicationMappingModel retrieveCommunicationMapping($communication_mapping_id)

Retrieve a communication mapping

Retrieve a communication mapping

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

$api_instance = new BumbalClient\Api\CommunicationmappingApi();
$communication_mapping_id = 789; // int | ID of communication mapping to return

try {
    $result = $api_instance->retrieveCommunicationMapping($communication_mapping_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmappingApi->retrieveCommunicationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_mapping_id** | **int**| ID of communication mapping to return |

### Return type

[**\BumbalClient\Model\CommunicationMappingModel**](../Model/CommunicationMappingModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationMapping**
> \BumbalClient\Model\CommunicationMappingListResponse retrieveListCommunicationMapping($arguments)

Retrieve list of communication mappings

Retrieve list of communication mappings

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

$api_instance = new BumbalClient\Api\CommunicationmappingApi();
$arguments = new \BumbalClient\Model\CommunicationMappingRetrieveListArguments(); // \BumbalClient\Model\CommunicationMappingRetrieveListArguments | Communication Mapping RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCommunicationMapping($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationmappingApi->retrieveListCommunicationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationMappingRetrieveListArguments**](../Model/CommunicationMappingRetrieveListArguments.md)| Communication Mapping RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationMappingListResponse**](../Model/CommunicationMappingListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

