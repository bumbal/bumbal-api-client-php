# BumbalClient\RecurrenceApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRecurrence**](RecurrenceApi.md#deleteRecurrence) | **DELETE** /recurrence/{recurrenceId} | Delete an Recurrence
[**finish**](RecurrenceApi.md#finish) | **POST** /recurrence/finish | Cleans up after the process run
[**getRuns**](RecurrenceApi.md#getRuns) | **POST** /recurrence/get-runs | Returns the given runs for the next recurrences!
[**processRuns**](RecurrenceApi.md#processRuns) | **POST** /recurrence/process-runs | Executes the the processes for the ids retrieved with get-runs
[**retrieveListRecurrence**](RecurrenceApi.md#retrieveListRecurrence) | **PUT** /recurrence | Retrieve List of Recurrences
[**retrieveRecurrence**](RecurrenceApi.md#retrieveRecurrence) | **GET** /recurrence/{recurrenceId} | Retrieve a Recurrence
[**updateRecurrence**](RecurrenceApi.md#updateRecurrence) | **PUT** /recurrence/{recurrenceId} | Update a Recurrence


# **deleteRecurrence**
> \BumbalClient\Model\ApiResponse deleteRecurrence($recurrence_id)

Delete an Recurrence

Delete an Recurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to update

try {
    $result = $api_instance->deleteRecurrence($recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->deleteRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrence_id** | **int**| ID of recurrence to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **finish**
> \BumbalClient\Model\RecurrenceFinishResponse finish()

Cleans up after the process run



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();

try {
    $result = $api_instance->finish();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->finish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\RecurrenceFinishResponse**](../Model/RecurrenceFinishResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuns**
> \BumbalClient\Model\RecurrenceGetRunsResponse getRuns($arguments)

Returns the given runs for the next recurrences!



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();
$arguments = new \BumbalClient\Model\RecurrenceGetRunsArguments(); // \BumbalClient\Model\RecurrenceGetRunsArguments | Request Arguments

try {
    $result = $api_instance->getRuns($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->getRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RecurrenceGetRunsArguments**](../Model/RecurrenceGetRunsArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\RecurrenceGetRunsResponse**](../Model/RecurrenceGetRunsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processRuns**
> \BumbalClient\Model\RecurrenceProcessRunsResponse processRuns($arguments)

Executes the the processes for the ids retrieved with get-runs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();
$arguments = new \BumbalClient\Model\RecurrenceProcessRunsArguments(); // \BumbalClient\Model\RecurrenceProcessRunsArguments | Request Arguments

try {
    $result = $api_instance->processRuns($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->processRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RecurrenceProcessRunsArguments**](../Model/RecurrenceProcessRunsArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\RecurrenceProcessRunsResponse**](../Model/RecurrenceProcessRunsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRecurrence**
> \BumbalClient\Model\RecurrenceModel[] retrieveListRecurrence($arguments)

Retrieve List of Recurrences

Retrieve List of Recurrences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();
$arguments = new \BumbalClient\Model\RecurrenceRetrieveListArguments(); // \BumbalClient\Model\RecurrenceRetrieveListArguments | Recurrence RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRecurrence($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->retrieveListRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RecurrenceRetrieveListArguments**](../Model/RecurrenceRetrieveListArguments.md)| Recurrence RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\RecurrenceModel[]**](../Model/RecurrenceModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRecurrence**
> \BumbalClient\Model\RecurrenceModel retrieveRecurrence($recurrence_id)

Retrieve a Recurrence

Retrieve an Recurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to retrieve

try {
    $result = $api_instance->retrieveRecurrence($recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->retrieveRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrence_id** | **int**| ID of recurrence to retrieve |

### Return type

[**\BumbalClient\Model\RecurrenceModel**](../Model/RecurrenceModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecurrence**
> \BumbalClient\Model\ApiResponse updateRecurrence($recurrence_id)

Update a Recurrence

Update an Recurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to update

try {
    $result = $api_instance->updateRecurrence($recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->updateRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrence_id** | **int**| ID of recurrence to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

