# BumbalClient\DriverUnavailabilityApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDriverUnavailability**](DriverUnavailabilityApi.md#createDriverUnavailability) | **POST** /driver-unavailability | Add a new DriverUnavailability
[**deleteDriverUnavailability**](DriverUnavailabilityApi.md#deleteDriverUnavailability) | **DELETE** /driver-unavailability/{driverunavailabilityId} | Delete a DriverUnavailability entry
[**retrieveDriverUnavailability**](DriverUnavailabilityApi.md#retrieveDriverUnavailability) | **GET** /driver-unavailability/{driverunavailabilityId} | Retrieve a DriverUnavailability
[**retrieveListDriverUnavailability**](DriverUnavailabilityApi.md#retrieveListDriverUnavailability) | **PUT** /driver-unavailability | Retrieve List of DriverUnavailability
[**setDriverUnavailability**](DriverUnavailabilityApi.md#setDriverUnavailability) | **POST** /driver-unavailability/set | Set (create or update) a driver unavailability
[**updateDriverUnavailability**](DriverUnavailabilityApi.md#updateDriverUnavailability) | **PUT** /driver-unavailability/{driverunavailabilityId} | Update a specific DriverUnavailability object


# **createDriverUnavailability**
> \BumbalClient\Model\ApiResponse4 createDriverUnavailability($body)

Add a new DriverUnavailability

Add a new DriverUnavailability

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

$apiInstance = new BumbalClient\Api\DriverUnavailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\DriverUnavailabilityModel(); // \BumbalClient\Model\DriverUnavailabilityModel | DriverUnavailability object that needs to be created

try {
    $result = $apiInstance->createDriverUnavailability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverUnavailabilityApi->createDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)| DriverUnavailability object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse4**](../Model/ApiResponse4.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDriverUnavailability**
> \BumbalClient\Model\ApiResponse2 deleteDriverUnavailability($driverunavailability_id)

Delete a DriverUnavailability entry

Delete a Metadata entry

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

$apiInstance = new BumbalClient\Api\DriverUnavailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driverunavailability_id = 789; // int | ID of DriverUnavailability to delete

try {
    $result = $apiInstance->deleteDriverUnavailability($driverunavailability_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverUnavailabilityApi->deleteDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driverunavailability_id** | **int**| ID of DriverUnavailability to delete |

### Return type

[**\BumbalClient\Model\ApiResponse2**](../Model/ApiResponse2.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDriverUnavailability**
> \BumbalClient\Model\DriverUnavailabilityModel retrieveDriverUnavailability($driverunavailability_id, $include_object_type_name, $include_record_info)

Retrieve a DriverUnavailability

Retrieve an DriverUnavailability

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

$apiInstance = new BumbalClient\Api\DriverUnavailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driverunavailability_id = 789; // int | ID of DriverUnavailability to retrieve
$include_object_type_name = false; // bool | Show the name of the object type
$include_record_info = false; // bool | Show the record info

try {
    $result = $apiInstance->retrieveDriverUnavailability($driverunavailability_id, $include_object_type_name, $include_record_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverUnavailabilityApi->retrieveDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driverunavailability_id** | **int**| ID of DriverUnavailability to retrieve |
 **include_object_type_name** | **bool**| Show the name of the object type | [optional] [default to false]
 **include_record_info** | **bool**| Show the record info | [optional] [default to false]

### Return type

[**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListDriverUnavailability**
> \BumbalClient\Model\DriverUnavailabilityListResponse retrieveListDriverUnavailability($arguments)

Retrieve List of DriverUnavailability

Retrieve List of DriverUnavailability

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

$apiInstance = new BumbalClient\Api\DriverUnavailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\DriverUnavailabilityRetrieveListArguments(); // \BumbalClient\Model\DriverUnavailabilityRetrieveListArguments | DriverUnavailability RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListDriverUnavailability($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverUnavailabilityApi->retrieveListDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\DriverUnavailabilityRetrieveListArguments**](../Model/DriverUnavailabilityRetrieveListArguments.md)| DriverUnavailability RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\DriverUnavailabilityListResponse**](../Model/DriverUnavailabilityListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDriverUnavailability**
> \BumbalClient\Model\ApiResponse setDriverUnavailability($body)

Set (create or update) a driver unavailability

Set (create or update) a driver unavailability. If id or links are set in the data, and a corresponding driver unavailability is found in Bumbal, an update will be performed.

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

$apiInstance = new BumbalClient\Api\DriverUnavailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\DriverUnavailabilityModel(); // \BumbalClient\Model\DriverUnavailabilityModel | DriverUnavailability object

try {
    $result = $apiInstance->setDriverUnavailability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverUnavailabilityApi->setDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)| DriverUnavailability object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDriverUnavailability**
> \BumbalClient\Model\ApiResponse1 updateDriverUnavailability($driverunavailability_id, $body)

Update a specific DriverUnavailability object

Update a specific DriverUnavailability object

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

$apiInstance = new BumbalClient\Api\DriverUnavailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driverunavailability_id = 789; // int | ID of the DriverUnavailability object to update
$body = new \BumbalClient\Model\DriverUnavailabilityModel(); // \BumbalClient\Model\DriverUnavailabilityModel | DriverUnavailability object that needs to be updated

try {
    $result = $apiInstance->updateDriverUnavailability($driverunavailability_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverUnavailabilityApi->updateDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driverunavailability_id** | **int**| ID of the DriverUnavailability object to update |
 **body** | [**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)| DriverUnavailability object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse1**](../Model/ApiResponse1.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

