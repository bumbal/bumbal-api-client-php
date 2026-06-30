# BumbalClient\VehicleTypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVehicleType**](VehicleTypeApi.md#createVehicleType) | **POST** /vehicle-type | Add a new VehicleType
[**deleteVehicleType**](VehicleTypeApi.md#deleteVehicleType) | **DELETE** /vehicle-type/{vehicleTypeId} | Delete a VehicleType entry
[**retrieveListVehicleType**](VehicleTypeApi.md#retrieveListVehicleType) | **PUT** /vehicle-type | Retrieve List of VehicleTypes
[**retrieveVehicleType**](VehicleTypeApi.md#retrieveVehicleType) | **GET** /vehicle-type/{vehicleTypeId} | Retrieve a VehicleType
[**updateVehicleType**](VehicleTypeApi.md#updateVehicleType) | **PUT** /vehicle-type/{vehicleTypeId} | Update a specific VehicleType object


# **createVehicleType**
> \BumbalClient\Model\VehicleTypeCreateResponse createVehicleType($body)

Add a new VehicleType

Add a new VehicleType

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

$apiInstance = new BumbalClient\Api\VehicleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\VehicleTypeModel(); // \BumbalClient\Model\VehicleTypeModel | VehicleType object that needs to be created

try {
    $result = $apiInstance->createVehicleType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleTypeApi->createVehicleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\VehicleTypeModel**](../Model/VehicleTypeModel.md)| VehicleType object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\VehicleTypeCreateResponse**](../Model/VehicleTypeCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVehicleType**
> \BumbalClient\Model\VehicleTypeDeleteResponse deleteVehicleType($vehicle_type_id)

Delete a VehicleType entry

Delete a VehicleType entry

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

$apiInstance = new BumbalClient\Api\VehicleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vehicle_type_id = 789; // int | ID of VehicleType to delete

try {
    $result = $apiInstance->deleteVehicleType($vehicle_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleTypeApi->deleteVehicleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_type_id** | **int**| ID of VehicleType to delete |

### Return type

[**\BumbalClient\Model\VehicleTypeDeleteResponse**](../Model/VehicleTypeDeleteResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListVehicleType**
> \BumbalClient\Model\VehicleTypeListResponse retrieveListVehicleType($arguments)

Retrieve List of VehicleTypes

Retrieve List of VehicleTypes

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

$apiInstance = new BumbalClient\Api\VehicleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\VehicleTypeRetrieveListArguments(); // \BumbalClient\Model\VehicleTypeRetrieveListArguments | VehicleType RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListVehicleType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleTypeApi->retrieveListVehicleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\VehicleTypeRetrieveListArguments**](../Model/VehicleTypeRetrieveListArguments.md)| VehicleType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\VehicleTypeListResponse**](../Model/VehicleTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveVehicleType**
> \BumbalClient\Model\VehicleTypeModel retrieveVehicleType($vehicle_type_id)

Retrieve a VehicleType

Retrieve an VehicleType

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

$apiInstance = new BumbalClient\Api\VehicleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vehicle_type_id = 789; // int | ID of VehicleType to retrieve

try {
    $result = $apiInstance->retrieveVehicleType($vehicle_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleTypeApi->retrieveVehicleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_type_id** | **int**| ID of VehicleType to retrieve |

### Return type

[**\BumbalClient\Model\VehicleTypeModel**](../Model/VehicleTypeModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVehicleType**
> \BumbalClient\Model\VehicleTypeUpdateResponse updateVehicleType($vehicle_type_id, $body)

Update a specific VehicleType object

Update a specific VehicleType object

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

$apiInstance = new BumbalClient\Api\VehicleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vehicle_type_id = 789; // int | ID of the VehicleType object to update
$body = new \BumbalClient\Model\VehicleTypeModel(); // \BumbalClient\Model\VehicleTypeModel | VehicleType object that needs to be updated

try {
    $result = $apiInstance->updateVehicleType($vehicle_type_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleTypeApi->updateVehicleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_type_id** | **int**| ID of the VehicleType object to update |
 **body** | [**\BumbalClient\Model\VehicleTypeModel**](../Model/VehicleTypeModel.md)| VehicleType object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\VehicleTypeUpdateResponse**](../Model/VehicleTypeUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

