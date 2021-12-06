# BumbalClient\ServicewindowsschemeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteServiceWindowsScheme**](ServicewindowsschemeApi.md#deleteServiceWindowsScheme) | **DELETE** /service-windows-scheme/{serviceWindowsSchemeId} | Delete a service windows scheme
[**retrieveListServiceWindowsScheme**](ServicewindowsschemeApi.md#retrieveListServiceWindowsScheme) | **PUT** /service-windows-scheme | Retrieve a list of service windows schemes
[**retrieveServiceWindowsScheme**](ServicewindowsschemeApi.md#retrieveServiceWindowsScheme) | **GET** /service-windows-scheme/{serviceWindowsSchemeId} | Retrieve a single service windows scheme
[**setServiceWindowsScheme**](ServicewindowsschemeApi.md#setServiceWindowsScheme) | **POST** /service-windows-scheme/set | Add or update a service windows scheme


# **deleteServiceWindowsScheme**
> \BumbalClient\Model\ApiResponse deleteServiceWindowsScheme($service_windows_scheme_id)

Delete a service windows scheme

Delete a service windows scheme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ServicewindowsschemeApi();
$service_windows_scheme_id = 789; // int | ID of Service Windows Scheme to delete

try {
    $result = $api_instance->deleteServiceWindowsScheme($service_windows_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowsschemeApi->deleteServiceWindowsScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_windows_scheme_id** | **int**| ID of Service Windows Scheme to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListServiceWindowsScheme**
> \BumbalClient\Model\ServiceWindowsSchemeListResponse retrieveListServiceWindowsScheme($arguments)

Retrieve a list of service windows schemes

Retrieve a list of service windows schemes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ServicewindowsschemeApi();
$arguments = new \BumbalClient\Model\ServiceWindowsSchemeRetrieveListArguments(); // \BumbalClient\Model\ServiceWindowsSchemeRetrieveListArguments | Service Windows Scheme RetrieveList Arguments

try {
    $result = $api_instance->retrieveListServiceWindowsScheme($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowsschemeApi->retrieveListServiceWindowsScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ServiceWindowsSchemeRetrieveListArguments**](../Model/ServiceWindowsSchemeRetrieveListArguments.md)| Service Windows Scheme RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ServiceWindowsSchemeListResponse**](../Model/ServiceWindowsSchemeListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveServiceWindowsScheme**
> \BumbalClient\Model\ServiceWindowsSchemeModel retrieveServiceWindowsScheme($service_windows_scheme_id)

Retrieve a single service windows scheme

Retrieve a single service windows scheme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ServicewindowsschemeApi();
$service_windows_scheme_id = 789; // int | ID of Service windows scheme to retrieve

try {
    $result = $api_instance->retrieveServiceWindowsScheme($service_windows_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowsschemeApi->retrieveServiceWindowsScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_windows_scheme_id** | **int**| ID of Service windows scheme to retrieve |

### Return type

[**\BumbalClient\Model\ServiceWindowsSchemeModel**](../Model/ServiceWindowsSchemeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setServiceWindowsScheme**
> \BumbalClient\Model\ApiResponse setServiceWindowsScheme($body)

Add or update a service windows scheme

Add or update a service windows scheme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ServicewindowsschemeApi();
$body = new \BumbalClient\Model\ServiceWindowsSchemeModel(); // \BumbalClient\Model\ServiceWindowsSchemeModel | Service windows scheme object that needs to be created or updated

try {
    $result = $api_instance->setServiceWindowsScheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicewindowsschemeApi->setServiceWindowsScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ServiceWindowsSchemeModel**](../Model/ServiceWindowsSchemeModel.md)| Service windows scheme object that needs to be created or updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

