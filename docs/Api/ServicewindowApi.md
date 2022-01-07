# BumbalClient\ServicewindowApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListServiceWindow**](ServicewindowApi.md#retrieveListServiceWindow) | **PUT** /service-window | Retrieve a list of service windows
[**retrieveServiceWindow**](ServicewindowApi.md#retrieveServiceWindow) | **GET** /service-window/{serviceWindowId} | Retrieve a single service window
[**setServiceWindow**](ServicewindowApi.md#setServiceWindow) | **POST** /service-window/set | Add or update a service window


# **retrieveListServiceWindow**
> \BumbalClient\Model\ServiceWindowListResponse retrieveListServiceWindow($arguments)

Retrieve a list of service windows

Retrieve a list of service windows

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

$api_instance = new BumbalClient\Api\ServicewindowApi();
$arguments = new \BumbalClient\Model\ServiceWindowRetrieveListArguments(); // \BumbalClient\Model\ServiceWindowRetrieveListArguments | Service Window RetrieveList Arguments

try {
    $result = $api_instance->retrieveListServiceWindow($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowApi->retrieveListServiceWindow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ServiceWindowRetrieveListArguments**](../Model/ServiceWindowRetrieveListArguments.md)| Service Window RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ServiceWindowListResponse**](../Model/ServiceWindowListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveServiceWindow**
> \BumbalClient\Model\ServiceWindowModel retrieveServiceWindow($service_window_id)

Retrieve a single service window

Retrieve a single service window

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

$api_instance = new BumbalClient\Api\ServicewindowApi();
$service_window_id = 789; // int | ID of Service windows scheme to retrieve

try {
    $result = $api_instance->retrieveServiceWindow($service_window_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowApi->retrieveServiceWindow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_window_id** | **int**| ID of Service windows scheme to retrieve |

### Return type

[**\BumbalClient\Model\ServiceWindowModel**](../Model/ServiceWindowModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setServiceWindow**
> \BumbalClient\Model\ApiResponse setServiceWindow($body)

Add or update a service window

Add or update a service window

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

$api_instance = new BumbalClient\Api\ServicewindowApi();
$body = new \BumbalClient\Model\ServiceWindowModel(); // \BumbalClient\Model\ServiceWindowModel | Service window object that needs to be created or updated

try {
    $result = $api_instance->setServiceWindow($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowApi->setServiceWindow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ServiceWindowModel**](../Model/ServiceWindowModel.md)| Service window object that needs to be created or updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

