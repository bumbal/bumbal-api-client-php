# BumbalClient\RecurrenceApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustRecurrenceByActivityId**](RecurrenceApi.md#adjustRecurrenceByActivityId) | **PUT** /recurrence/adjust-recurrence-by-activity-id/{activityId} | Adjust all recurrence objects following up to the provided activity id
[**adjustRecurrenceByRouteId**](RecurrenceApi.md#adjustRecurrenceByRouteId) | **PUT** /recurrence/adjust-recurrence-by-route-id/{routeId} | Adjust all recurrence objects following up to the provided route id
[**attachRecurringActivities**](RecurrenceApi.md#attachRecurringActivities) | **POST** /recurrence/attach-recurring-activities | Attach recurring activities to a route recurrence
[**createActivityRecurrence**](RecurrenceApi.md#createActivityRecurrence) | **POST** /recurrence/create-activity-recurrence | create a activity recurrence
[**createActivityRecurrence_0**](RecurrenceApi.md#createActivityRecurrence_0) | **POST** /recurrence/activity | Create an activity recurrence on the service
[**createRecurrenceRoute**](RecurrenceApi.md#createRecurrenceRoute) | **POST** /recurrence/route | Create an route recurrence on the service
[**createRouteRecurrence**](RecurrenceApi.md#createRouteRecurrence) | **POST** /recurrence/create-route-recurrence | create a route recurrence
[**deleteRecurrenceObject**](RecurrenceApi.md#deleteRecurrenceObject) | **DELETE** /recurrence/delete-recurrence | Delete a Recurrence
[**finish**](RecurrenceApi.md#finish) | **POST** /recurrence/finish | Cleans up after the process run
[**getRuns**](RecurrenceApi.md#getRuns) | **POST** /recurrence/get-runs | Returns the given runs for the next recurrences!
[**processRuns**](RecurrenceApi.md#processRuns) | **POST** /recurrence/process-runs | Executes the the processes for the ids retrieved with get-runs
[**retrieveListRecurrence**](RecurrenceApi.md#retrieveListRecurrence) | **PUT** /recurrence | Retrieve List of Recurrences
[**retrieveRecurrence**](RecurrenceApi.md#retrieveRecurrence) | **GET** /recurrence/{recurrenceId} | Retrieve a Recurrence
[**updateRecurrence**](RecurrenceApi.md#updateRecurrence) | **PUT** /recurrence/{recurrenceId} | Update a recurrence


# **adjustRecurrenceByActivityId**
> \BumbalClient\Model\ActivityModel adjustRecurrenceByActivityId($activity_id)

Adjust all recurrence objects following up to the provided activity id

Adjust all recurrence objects following up to the provided activity id

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$activity_id = 789; // int | ID of Activity to use as a template for future recurring activities

try {
    $result = $api_instance->adjustRecurrenceByActivityId($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->adjustRecurrenceByActivityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of Activity to use as a template for future recurring activities |

### Return type

[**\BumbalClient\Model\ActivityModel**](../Model/ActivityModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adjustRecurrenceByRouteId**
> \BumbalClient\Model\RouteModel adjustRecurrenceByRouteId($route_id)

Adjust all recurrence objects following up to the provided route id

Adjust all recurrence objects following up to the provided route id

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$route_id = 789; // int | ID of route to use as a template for future recurring routes

try {
    $result = $api_instance->adjustRecurrenceByRouteId($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->adjustRecurrenceByRouteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to use as a template for future recurring routes |

### Return type

[**\BumbalClient\Model\RouteModel**](../Model/RouteModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachRecurringActivities**
> attachRecurringActivities($body)

Attach recurring activities to a route recurrence

Attach recurring activities to a route recurrence

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$body = new \BumbalClient\Model\Body2(); // \BumbalClient\Model\Body2 | 

try {
    $api_instance->attachRecurringActivities($body);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->attachRecurringActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\Body2**](../Model/Body2.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createActivityRecurrence**
> \BumbalClient\Model\ApiResponse createActivityRecurrence($body)

create a activity recurrence

create a activity recurrence

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$body = new \BumbalClient\Model\RecurrenceModel(); // \BumbalClient\Model\RecurrenceModel | Recurrence object that needs to be created

try {
    $result = $api_instance->createActivityRecurrence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->createActivityRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RecurrenceModel**](../Model/RecurrenceModel.md)| Recurrence object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createActivityRecurrence_0**
> \BumbalClient\Model\ApiResponse createActivityRecurrence_0($body)

Create an activity recurrence on the service

Create an activity recurrence on the service

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$body = new \BumbalClient\Model\Body(); // \BumbalClient\Model\Body | Recurrence object that needs to be created

try {
    $result = $api_instance->createActivityRecurrence_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->createActivityRecurrence_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\Body**](../Model/Body.md)| Recurrence object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRecurrenceRoute**
> \BumbalClient\Model\ApiResponse createRecurrenceRoute($body)

Create an route recurrence on the service

Create an route recurrence on the service

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$body = new \BumbalClient\Model\Body1(); // \BumbalClient\Model\Body1 | Recurrence object that needs to be created

try {
    $result = $api_instance->createRecurrenceRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->createRecurrenceRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\Body1**](../Model/Body1.md)| Recurrence object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRouteRecurrence**
> \BumbalClient\Model\ApiResponse createRouteRecurrence($body)

create a route recurrence

create a route recurrence

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$body = new \BumbalClient\Model\RecurrenceModel(); // \BumbalClient\Model\RecurrenceModel | Recurrence object that needs to be created

try {
    $result = $api_instance->createRouteRecurrence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->createRouteRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RecurrenceModel**](../Model/RecurrenceModel.md)| Recurrence object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecurrenceObject**
> \BumbalClient\Model\ApiResponse deleteRecurrenceObject($body)

Delete a Recurrence

Delete a Recurrence

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$body = new \BumbalClient\Model\RecurrenceDeleteModel(); // \BumbalClient\Model\RecurrenceDeleteModel | Delete recurrence model

try {
    $result = $api_instance->deleteRecurrenceObject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->deleteRecurrenceObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RecurrenceDeleteModel**](../Model/RecurrenceDeleteModel.md)| Delete recurrence model |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

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
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

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
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

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
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRecurrence**
> \BumbalClient\Model\RecurrenceListResponse retrieveListRecurrence($arguments)

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
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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

[**\BumbalClient\Model\RecurrenceListResponse**](../Model/RecurrenceListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

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
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecurrence**
> \BumbalClient\Model\ApiResponse updateRecurrence($recurrence_id, $body)

Update a recurrence

Endpoint to update an existing recurrence. When updating a recurrence, The following properties are required: ID, frequency, end_option, summary, period_name and show_ahead. When end_option is interval count, the property interval_count has to be filled out and when selecting the end_option end_date, the end_date should be filled out.

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

$api_instance = new BumbalClient\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to update
$body = new \BumbalClient\Model\RecurrenceModel(); // \BumbalClient\Model\RecurrenceModel | Recurrence object that needs to be updated

try {
    $result = $api_instance->updateRecurrence($recurrence_id, $body);
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
 **body** | [**\BumbalClient\Model\RecurrenceModel**](../Model/RecurrenceModel.md)| Recurrence object that needs to be updated |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

