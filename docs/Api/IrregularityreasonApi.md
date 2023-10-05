# BumbalClient\IrregularityreasonApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIrregularityReason**](IrregularityreasonApi.md#createIrregularityReason) | **POST** /irregularity-reason/set | Create a irregularity reason
[**deleteIrregularityReason**](IrregularityreasonApi.md#deleteIrregularityReason) | **DELETE** /irregularity-reason/{irregularityReasonId} | Delete a irregularity reason
[**retrieveIrregularityReason**](IrregularityreasonApi.md#retrieveIrregularityReason) | **GET** /irregularity-reason/{irregularityReasonId} | Retrieve a irregularity reason
[**retrieveListIrregularityReason**](IrregularityreasonApi.md#retrieveListIrregularityReason) | **PUT** /irregularity-reason | Retrieve list of irregularity categories


# **createIrregularityReason**
> \BumbalClient\Model\ApiResponse createIrregularityReason($body)

Create a irregularity reason

Create a reason for a irregularities

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

$api_instance = new BumbalClient\Api\IrregularityreasonApi();
$body = new \BumbalClient\Model\IrregularityReasonModel(); // \BumbalClient\Model\IrregularityReasonModel | IrregularityReason object

try {
    $result = $api_instance->createIrregularityReason($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityreasonApi->createIrregularityReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\IrregularityReasonModel**](../Model/IrregularityReasonModel.md)| IrregularityReason object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIrregularityReason**
> \BumbalClient\Model\ApiResponse deleteIrregularityReason($irregularity_reason_id)

Delete a irregularity reason

Delete a irregularity reason

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

$api_instance = new BumbalClient\Api\IrregularityreasonApi();
$irregularity_reason_id = 789; // int | ID of the irregularity reason to delete

try {
    $result = $api_instance->deleteIrregularityReason($irregularity_reason_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityreasonApi->deleteIrregularityReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **irregularity_reason_id** | **int**| ID of the irregularity reason to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveIrregularityReason**
> \BumbalClient\Model\IrregularityReasonModel retrieveIrregularityReason($irregularity_reason_id)

Retrieve a irregularity reason

Retrieve a irregularity reason

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

$api_instance = new BumbalClient\Api\IrregularityreasonApi();
$irregularity_reason_id = 789; // int | ID of irregularity reason to return

try {
    $result = $api_instance->retrieveIrregularityReason($irregularity_reason_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityreasonApi->retrieveIrregularityReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **irregularity_reason_id** | **int**| ID of irregularity reason to return |

### Return type

[**\BumbalClient\Model\IrregularityReasonModel**](../Model/IrregularityReasonModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListIrregularityReason**
> \BumbalClient\Model\IrregularityReasonListResponse retrieveListIrregularityReason($arguments)

Retrieve list of irregularity categories

Retrieve list of irregularity categories

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

$api_instance = new BumbalClient\Api\IrregularityreasonApi();
$arguments = new \BumbalClient\Model\IrregularityReasonRetrieveListArguments(); // \BumbalClient\Model\IrregularityReasonRetrieveListArguments | Irregularity reason RetrieveList Arguments

try {
    $result = $api_instance->retrieveListIrregularityReason($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityreasonApi->retrieveListIrregularityReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\IrregularityReasonRetrieveListArguments**](../Model/IrregularityReasonRetrieveListArguments.md)| Irregularity reason RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\IrregularityReasonListResponse**](../Model/IrregularityReasonListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

