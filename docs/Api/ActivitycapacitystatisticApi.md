# BumbalClient\ActivitycapacitystatisticApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveActivityCapacityStatistic**](ActivitycapacitystatisticApi.md#retrieveActivityCapacityStatistic) | **GET** /activity-capacity-statistic/{activityCapacityStatisticId} | Find ActivityCapacityStatistic by ID
[**retrieveListActivityCapacityStatistic**](ActivitycapacitystatisticApi.md#retrieveListActivityCapacityStatistic) | **PUT** /activity-capacity-statistic | Retrieve List of ActivityCapacityStatistics


# **retrieveActivityCapacityStatistic**
> \BumbalClient\Model\ActivityCapacityStatistic retrieveActivityCapacityStatistic($activity_capacity_statistic_id)

Find ActivityCapacityStatistic by ID

Returns a single ActivityCapacityStatistic

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

$api_instance = new BumbalClient\Api\ActivitycapacitystatisticApi();
$activity_capacity_statistic_id = 789; // int | ID of ActivityCapacityStatistic to return

try {
    $result = $api_instance->retrieveActivityCapacityStatistic($activity_capacity_statistic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitycapacitystatisticApi->retrieveActivityCapacityStatistic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_capacity_statistic_id** | **int**| ID of ActivityCapacityStatistic to return |

### Return type

[**\BumbalClient\Model\ActivityCapacityStatistic**](../Model/ActivityCapacityStatistic.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListActivityCapacityStatistic**
> \BumbalClient\Model\ActivityCapacityStatisticListResponse retrieveListActivityCapacityStatistic($arguments)

Retrieve List of ActivityCapacityStatistics

Retrieve List of ActivityCapacityStatistics ordered by activity sequence_nr. Use route_id + capacity_type_id filters to get graph data for a route.

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

$api_instance = new BumbalClient\Api\ActivitycapacitystatisticApi();
$arguments = new \BumbalClient\Model\ActivityCapacityStatisticRetrieveListArguments(); // \BumbalClient\Model\ActivityCapacityStatisticRetrieveListArguments | ActivityCapacityStatistic RetrieveList Arguments

try {
    $result = $api_instance->retrieveListActivityCapacityStatistic($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitycapacitystatisticApi->retrieveListActivityCapacityStatistic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ActivityCapacityStatisticRetrieveListArguments**](../Model/ActivityCapacityStatisticRetrieveListArguments.md)| ActivityCapacityStatistic RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ActivityCapacityStatisticListResponse**](../Model/ActivityCapacityStatisticListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

