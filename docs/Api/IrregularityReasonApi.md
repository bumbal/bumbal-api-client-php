# BumbalClient\IrregularityReasonApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIrregularityReason**](IrregularityReasonApi.md#createIrregularityReason) | **POST** /irregularity-reason/set | Create a irregularity reason
[**deleteIrregularityReason**](IrregularityReasonApi.md#deleteIrregularityReason) | **DELETE** /irregularity-reason/{irregularityReasonId} | Delete a irregularity reason
[**retrieveIrregularityReason**](IrregularityReasonApi.md#retrieveIrregularityReason) | **GET** /irregularity-reason/{irregularityReasonId} | Retrieve a irregularity reason
[**retrieveListIrregularityReason**](IrregularityReasonApi.md#retrieveListIrregularityReason) | **PUT** /irregularity-reason | Retrieve list of irregularity categories


# **createIrregularityReason**
> \BumbalClient\Model\ApiResponse createIrregularityReason($body)

Create a irregularity reason

Create a reason for a irregularities

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

$apiInstance = new BumbalClient\Api\IrregularityReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\IrregularityReasonModel(); // \BumbalClient\Model\IrregularityReasonModel | IrregularityReason object

try {
    $result = $apiInstance->createIrregularityReason($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityReasonApi->createIrregularityReason: ', $e->getMessage(), PHP_EOL;
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
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\IrregularityReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$irregularity_reason_id = 789; // int | ID of the irregularity reason to delete

try {
    $result = $apiInstance->deleteIrregularityReason($irregularity_reason_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityReasonApi->deleteIrregularityReason: ', $e->getMessage(), PHP_EOL;
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
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\IrregularityReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$irregularity_reason_id = 789; // int | ID of irregularity reason to return

try {
    $result = $apiInstance->retrieveIrregularityReason($irregularity_reason_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityReasonApi->retrieveIrregularityReason: ', $e->getMessage(), PHP_EOL;
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
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\IrregularityReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\IrregularityReasonRetrieveListArguments(); // \BumbalClient\Model\IrregularityReasonRetrieveListArguments | Irregularity reason RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListIrregularityReason($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularityReasonApi->retrieveListIrregularityReason: ', $e->getMessage(), PHP_EOL;
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

