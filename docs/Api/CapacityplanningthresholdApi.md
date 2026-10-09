# BumbalClient\CapacityplanningthresholdApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCapacityPlanningThreshold**](CapacityplanningthresholdApi.md#deleteCapacityPlanningThreshold) | **DELETE** /capacity-planning-threshold/{capacityPlanningThresholdId} | Delete a CapacityPlanningThreshold
[**retrieveCapacityPlanningThreshold**](CapacityplanningthresholdApi.md#retrieveCapacityPlanningThreshold) | **GET** /capacity-planning-threshold/{capacityPlanningThresholdId} | Find CapacityPlanningThreshold by ID
[**retrieveListCapacityPlanningThreshold**](CapacityplanningthresholdApi.md#retrieveListCapacityPlanningThreshold) | **PUT** /capacity-planning-threshold | Retrieve List of CapacityPlanningThresholds
[**setCapacityPlanningThreshold**](CapacityplanningthresholdApi.md#setCapacityPlanningThreshold) | **POST** /capacity-planning-threshold/set | Set (create or update) a CapacityPlanningThreshold


# **deleteCapacityPlanningThreshold**
> \BumbalClient\Model\ApiResponse deleteCapacityPlanningThreshold($capacity_planning_threshold_id)

Delete a CapacityPlanningThreshold

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

$api_instance = new BumbalClient\Api\CapacityplanningthresholdApi();
$capacity_planning_threshold_id = 789; // int | ID of CapacityPlanningThreshold to delete

try {
    $result = $api_instance->deleteCapacityPlanningThreshold($capacity_planning_threshold_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacityplanningthresholdApi->deleteCapacityPlanningThreshold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capacity_planning_threshold_id** | **int**| ID of CapacityPlanningThreshold to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCapacityPlanningThreshold**
> \BumbalClient\Model\CapacityPlanningThreshold retrieveCapacityPlanningThreshold($capacity_planning_threshold_id)

Find CapacityPlanningThreshold by ID

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

$api_instance = new BumbalClient\Api\CapacityplanningthresholdApi();
$capacity_planning_threshold_id = 789; // int | ID of CapacityPlanningThreshold to return

try {
    $result = $api_instance->retrieveCapacityPlanningThreshold($capacity_planning_threshold_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacityplanningthresholdApi->retrieveCapacityPlanningThreshold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capacity_planning_threshold_id** | **int**| ID of CapacityPlanningThreshold to return |

### Return type

[**\BumbalClient\Model\CapacityPlanningThreshold**](../Model/CapacityPlanningThreshold.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCapacityPlanningThreshold**
> \BumbalClient\Model\CapacityPlanningThreshold retrieveListCapacityPlanningThreshold($arguments)

Retrieve List of CapacityPlanningThresholds

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

$api_instance = new BumbalClient\Api\CapacityplanningthresholdApi();
$arguments = new \BumbalClient\Model\CapacityPlanningThresholdRetrieveListArguments(); // \BumbalClient\Model\CapacityPlanningThresholdRetrieveListArguments | 

try {
    $result = $api_instance->retrieveListCapacityPlanningThreshold($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacityplanningthresholdApi->retrieveListCapacityPlanningThreshold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CapacityPlanningThresholdRetrieveListArguments**](../Model/CapacityPlanningThresholdRetrieveListArguments.md)|  |

### Return type

[**\BumbalClient\Model\CapacityPlanningThreshold**](../Model/CapacityPlanningThreshold.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCapacityPlanningThreshold**
> \BumbalClient\Model\ApiResponse setCapacityPlanningThreshold($body)

Set (create or update) a CapacityPlanningThreshold

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

$api_instance = new BumbalClient\Api\CapacityplanningthresholdApi();
$body = new \BumbalClient\Model\CapacityPlanningThreshold(); // \BumbalClient\Model\CapacityPlanningThreshold | 

try {
    $result = $api_instance->setCapacityPlanningThreshold($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacityplanningthresholdApi->setCapacityPlanningThreshold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CapacityPlanningThreshold**](../Model/CapacityPlanningThreshold.md)|  |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

