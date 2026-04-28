# BumbalClient\DriverSchedulesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDriverSchedule**](DriverSchedulesApi.md#deleteDriverSchedule) | **DELETE** /driver-schedules/{driverScheduleId} | Delete an driver schedule
[**retrieveDriversSchedule**](DriverSchedulesApi.md#retrieveDriversSchedule) | **GET** /driver-schedules/{driverScheduleId} | Find driver schedule by ID
[**retrieveListDriverSchedules**](DriverSchedulesApi.md#retrieveListDriverSchedules) | **PUT** /driver-schedules | Retrieve List of Driver Schedules
[**setDriverSchedule**](DriverSchedulesApi.md#setDriverSchedule) | **POST** /driver-schedules/set | Set (create or update) a driver schedule


# **deleteDriverSchedule**
> \BumbalClient\Model\ApiResponse deleteDriverSchedule($driver_schedule_id)

Delete an driver schedule

Delete an driver schedule

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

$api_instance = new BumbalClient\Api\DriverSchedulesApi();
$driver_schedule_id = 789; // int | ID of the driver schedule to delete

try {
    $result = $api_instance->deleteDriverSchedule($driver_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverSchedulesApi->deleteDriverSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_schedule_id** | **int**| ID of the driver schedule to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDriversSchedule**
> \BumbalClient\Model\DriverSchedulesResponse retrieveDriversSchedule($driver_schedule_id)

Find driver schedule by ID

Retrieve a schedule by id

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

$api_instance = new BumbalClient\Api\DriverSchedulesApi();
$driver_schedule_id = 789; // int | ID of the driver to retrieve

try {
    $result = $api_instance->retrieveDriversSchedule($driver_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverSchedulesApi->retrieveDriversSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_schedule_id** | **int**| ID of the driver to retrieve |

### Return type

[**\BumbalClient\Model\DriverSchedulesResponse**](../Model/DriverSchedulesResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListDriverSchedules**
> \BumbalClient\Model\DriverSchedulesListResponse retrieveListDriverSchedules($arguments)

Retrieve List of Driver Schedules

Retrieve List of Driver Schedules

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

$api_instance = new BumbalClient\Api\DriverSchedulesApi();
$arguments = new \BumbalClient\Model\DriverSchedulesRetrieveListArguments(); // \BumbalClient\Model\DriverSchedulesRetrieveListArguments | Driver Schedule Retrieve List Arguments

try {
    $result = $api_instance->retrieveListDriverSchedules($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverSchedulesApi->retrieveListDriverSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\DriverSchedulesRetrieveListArguments**](../Model/DriverSchedulesRetrieveListArguments.md)| Driver Schedule Retrieve List Arguments |

### Return type

[**\BumbalClient\Model\DriverSchedulesListResponse**](../Model/DriverSchedulesListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDriverSchedule**
> \BumbalClient\Model\ApiResponse setDriverSchedule($body)

Set (create or update) a driver schedule

Set a driver schedule.

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

$api_instance = new BumbalClient\Api\DriverSchedulesApi();
$body = new \BumbalClient\Model\DriverSchedulesModel(); // \BumbalClient\Model\DriverSchedulesModel | Driver object

try {
    $result = $api_instance->setDriverSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverSchedulesApi->setDriverSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\DriverSchedulesModel**](../Model/DriverSchedulesModel.md)| Driver object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

