# BumbalClient\RoutepointsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListRoutePoints**](RoutepointsApi.md#retrieveListRoutePoints) | **PUT** /route-points | Find Route Points for multiple routes by route ID
[**retrieveRoutePoints**](RoutepointsApi.md#retrieveRoutePoints) | **GET** /route-points/{routeId} | Find Route Points by route ID


# **retrieveListRoutePoints**
> \BumbalClient\Model\RoutePointsModel[] retrieveListRoutePoints($arguments)

Find Route Points for multiple routes by route ID

Returns array of RoutePointsModels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RoutepointsApi();
$arguments = new \BumbalClient\Model\RoutePointsRetrieveListArguments(); // \BumbalClient\Model\RoutePointsRetrieveListArguments | Route Points RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRoutePoints($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutepointsApi->retrieveListRoutePoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RoutePointsRetrieveListArguments**](../Model/RoutePointsRetrieveListArguments.md)| Route Points RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\RoutePointsModel[]**](../Model/RoutePointsModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRoutePoints**
> \BumbalClient\Model\RoutePointsModel retrieveRoutePoints($route_id)

Find Route Points by route ID

Returns route_id with a GeoJSON object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RoutepointsApi();
$route_id = 789; // int | ID of Route for which to return the Route Points

try {
    $result = $api_instance->retrieveRoutePoints($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutepointsApi->retrieveRoutePoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of Route for which to return the Route Points |

### Return type

[**\BumbalClient\Model\RoutePointsModel**](../Model/RoutePointsModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

