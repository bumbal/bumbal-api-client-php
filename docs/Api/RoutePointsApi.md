# BumbalClient\RoutePointsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListRoutePoints**](RoutePointsApi.md#retrieveListRoutePoints) | **PUT** /route-points | Find Route Points for multiple routes by route ID
[**retrieveRoutePoints**](RoutePointsApi.md#retrieveRoutePoints) | **GET** /route-points/{routeId} | Find Route Points by route ID


# **retrieveListRoutePoints**
> \BumbalClient\Model\RoutePointsModel[] retrieveListRoutePoints($arguments)

Find Route Points for multiple routes by route ID

Returns array of RoutePointsModels

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

$apiInstance = new BumbalClient\Api\RoutePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\RoutePointsRetrieveListArguments(); // \BumbalClient\Model\RoutePointsRetrieveListArguments | Route Points RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListRoutePoints($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutePointsApi->retrieveListRoutePoints: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

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
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\RoutePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_id = 789; // int | ID of Route for which to return the Route Points

try {
    $result = $apiInstance->retrieveRoutePoints($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutePointsApi->retrieveRoutePoints: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

