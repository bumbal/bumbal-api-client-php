# BumbalClient\IrregularityApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIrregularity**](IrregularityApi.md#createIrregularity) | **POST** /irregularity/set | Create a irregularity
[**deleteIrregularity**](IrregularityApi.md#deleteIrregularity) | **DELETE** /irregularity/{irregularityId} | Delete a irregularity
[**retrieveIrregularity**](IrregularityApi.md#retrieveIrregularity) | **GET** /irregularity/{irregularityId} | Retrieve a irregularity
[**retrieveListIrregularity**](IrregularityApi.md#retrieveListIrregularity) | **PUT** /irregularity | Retrieve list of irregularities


# **createIrregularity**
> \BumbalClient\Model\ApiResponse createIrregularity($body)

Create a irregularity

Create a irregularity

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

$api_instance = new BumbalClient\Api\IrregularityApi();
$body = new \BumbalClient\Model\IrregularityModel(); // \BumbalClient\Model\IrregularityModel | Irregularity object

try {
    $result = $api_instance->createIrregularity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityApi->createIrregularity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\IrregularityModel**](../Model/IrregularityModel.md)| Irregularity object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIrregularity**
> \BumbalClient\Model\ApiResponse deleteIrregularity($irregularity_id)

Delete a irregularity

Delete a irregularity

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

$api_instance = new BumbalClient\Api\IrregularityApi();
$irregularity_id = 789; // int | ID of the irregularity to delete

try {
    $result = $api_instance->deleteIrregularity($irregularity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityApi->deleteIrregularity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **irregularity_id** | **int**| ID of the irregularity to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveIrregularity**
> \BumbalClient\Model\IrregularityModel retrieveIrregularity($irregularity_id)

Retrieve a irregularity

Retrieve a irregularity

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

$api_instance = new BumbalClient\Api\IrregularityApi();
$irregularity_id = 789; // int | ID of irregularity to return

try {
    $result = $api_instance->retrieveIrregularity($irregularity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityApi->retrieveIrregularity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **irregularity_id** | **int**| ID of irregularity to return |

### Return type

[**\BumbalClient\Model\IrregularityModel**](../Model/IrregularityModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListIrregularity**
> \BumbalClient\Model\IrregularityListResponse retrieveListIrregularity($arguments)

Retrieve list of irregularities

Retrieve list of irregularities

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

$api_instance = new BumbalClient\Api\IrregularityApi();
$arguments = new \BumbalClient\Model\IrregularityRetrieveListArguments(); // \BumbalClient\Model\IrregularityRetrieveListArguments | Irregularity RetrieveList Arguments

try {
    $result = $api_instance->retrieveListIrregularity($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityApi->retrieveListIrregularity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\IrregularityRetrieveListArguments**](../Model/IrregularityRetrieveListArguments.md)| Irregularity RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\IrregularityListResponse**](../Model/IrregularityListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

