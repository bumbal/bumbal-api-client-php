# BumbalClient\RoutecapacitystatisticApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListRouteCapacityStatistic**](RoutecapacitystatisticApi.md#retrieveListRouteCapacityStatistic) | **PUT** /route-capacity-statistic | Retrieve List of RouteCapacityStatistics
[**retrieveRouteCapacityStatistic**](RoutecapacitystatisticApi.md#retrieveRouteCapacityStatistic) | **GET** /route-capacity-statistic/{routeCapacityStatisticId} | Find RouteCapacityStatistic by ID


# **retrieveListRouteCapacityStatistic**
> \BumbalClient\Model\RouteCapacityStatisticListResponse retrieveListRouteCapacityStatistic($arguments)

Retrieve List of RouteCapacityStatistics

Retrieve List of RouteCapacityStatistics

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

$api_instance = new BumbalClient\Api\RoutecapacitystatisticApi();
$arguments = new \BumbalClient\Model\RouteCapacityStatisticRetrieveListArguments(); // \BumbalClient\Model\RouteCapacityStatisticRetrieveListArguments | RouteCapacityStatistic RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRouteCapacityStatistic($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutecapacitystatisticApi->retrieveListRouteCapacityStatistic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RouteCapacityStatisticRetrieveListArguments**](../Model/RouteCapacityStatisticRetrieveListArguments.md)| RouteCapacityStatistic RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\RouteCapacityStatisticListResponse**](../Model/RouteCapacityStatisticListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRouteCapacityStatistic**
> \BumbalClient\Model\RouteCapacityStatistic retrieveRouteCapacityStatistic($route_capacity_statistic_id)

Find RouteCapacityStatistic by ID

Returns a single RouteCapacityStatistic

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

$api_instance = new BumbalClient\Api\RoutecapacitystatisticApi();
$route_capacity_statistic_id = 789; // int | ID of RouteCapacityStatistic to return

try {
    $result = $api_instance->retrieveRouteCapacityStatistic($route_capacity_statistic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutecapacitystatisticApi->retrieveRouteCapacityStatistic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_capacity_statistic_id** | **int**| ID of RouteCapacityStatistic to return |

### Return type

[**\BumbalClient\Model\RouteCapacityStatistic**](../Model/RouteCapacityStatistic.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

