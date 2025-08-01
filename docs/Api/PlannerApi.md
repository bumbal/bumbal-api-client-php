# BumbalClient\PlannerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyPlanning**](PlannerApi.md#applyPlanning) | **POST** /planner/apply-planning | Apply a planning schema
[**autoPlan**](PlannerApi.md#autoPlan) | **POST** /planner/auto-plan | Plan a certain activity in any fitting route
[**autoPlanResult**](PlannerApi.md#autoPlanResult) | **POST** /planner/auto-plan-result | Fetch current result for a auto plan Request. This could be done, in progress or cancelled.
[**checkAvailability**](PlannerApi.md#checkAvailability) | **POST** /planner/check-availability | check availability in planning for a certain set of activity properties
[**checkAvailabilityCaching**](PlannerApi.md#checkAvailabilityCaching) | **POST** /planner/check-availability-caching | Retrieve the cached check-availability
[**checkAvailabilityFast**](PlannerApi.md#checkAvailabilityFast) | **POST** /planner/check-availability-fast | Retrieve a quicker check-availability
[**checkAvailabilityFastResult**](PlannerApi.md#checkAvailabilityFastResult) | **POST** /planner/check-availability-fast-result | Fetch current result for a checkAvailability Fast Request. This could be done, in progress or cancelled.
[**checkAvailabilityResult**](PlannerApi.md#checkAvailabilityResult) | **POST** /planner/check-availability-result | Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.
[**plannerAddActivitiesToRoute**](PlannerApi.md#plannerAddActivitiesToRoute) | **POST** /planner/add-activities-to-route | Add Activities to Route
[**removeActivitiesFromRoute**](PlannerApi.md#removeActivitiesFromRoute) | **POST** /planner/remove-activities-from-route | Remove Activities From Route
[**updateRecurrenceRelations**](PlannerApi.md#updateRecurrenceRelations) | **POST** /planner/update-recurrence-relations | Update recurrence relations for follow routes


# **applyPlanning**
> \BumbalClient\Model\ApiResponse applyPlanning($arguments)

Apply a planning schema

Apply a planning schema

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\ApplyPlanningArguments(); // \BumbalClient\Model\ApplyPlanningArguments | Request Arguments

try {
    $result = $api_instance->applyPlanning($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->applyPlanning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ApplyPlanningArguments**](../Model/ApplyPlanningArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPlan**
> \BumbalClient\Model\ApiResponse autoPlan($arguments)

Plan a certain activity in any fitting route

Plan a certain activity in any fitting route

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\AutoPlanArguments(); // \BumbalClient\Model\AutoPlanArguments | Request Arguments

try {
    $result = $api_instance->autoPlan($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->autoPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AutoPlanArguments**](../Model/AutoPlanArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPlanResult**
> \BumbalClient\Model\ApiResponse autoPlanResult($arguments)

Fetch current result for a auto plan Request. This could be done, in progress or cancelled.

Fetch current result for a auto plan Request. This could be done, in progress or cancelled.

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\AutoPlanArguments(); // \BumbalClient\Model\AutoPlanArguments | Request Arguments

try {
    $result = $api_instance->autoPlanResult($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->autoPlanResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AutoPlanArguments**](../Model/AutoPlanArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAvailability**
> \BumbalClient\Model\ApiResponse checkAvailability($arguments)

check availability in planning for a certain set of activity properties

check availability in planning for a certain set of activity properties

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $result = $api_instance->checkAvailability($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAvailabilityCaching**
> \BumbalClient\Model\ApiResponse checkAvailabilityCaching($arguments)

Retrieve the cached check-availability

Fetch the current availability for an activity from the cache. Check-availability caching should be enabled.

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityCacheArguments(); // \BumbalClient\Model\CheckAvailabilityCacheArguments | Request Arguments

try {
    $result = $api_instance->checkAvailabilityCaching($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailabilityCaching: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityCacheArguments**](../Model/CheckAvailabilityCacheArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAvailabilityFast**
> checkAvailabilityFast($arguments)

Retrieve a quicker check-availability

Does not do a complete optimization, but just looks if there is enough time on any existing route segment.

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $api_instance->checkAvailabilityFast($arguments);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailabilityFast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAvailabilityFastResult**
> checkAvailabilityFastResult($arguments)

Fetch current result for a checkAvailability Fast Request. This could be done, in progress or cancelled.

Fetch current result for a checkAvailability Fast Request. This could be done, in progress or cancelled.

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $api_instance->checkAvailabilityFastResult($arguments);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailabilityFastResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAvailabilityResult**
> \BumbalClient\Model\ApiResponse checkAvailabilityResult($arguments)

Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.

Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $result = $api_instance->checkAvailabilityResult($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailabilityResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerAddActivitiesToRoute**
> \BumbalClient\Model\AddActivitiesToRouteResponse plannerAddActivitiesToRoute($arguments)

Add Activities to Route

Add Activities to Route

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\AddActivitiesToRouteArguments(); // \BumbalClient\Model\AddActivitiesToRouteArguments | Request Arguments

try {
    $result = $api_instance->plannerAddActivitiesToRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerAddActivitiesToRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddActivitiesToRouteArguments**](../Model/AddActivitiesToRouteArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\AddActivitiesToRouteResponse**](../Model/AddActivitiesToRouteResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeActivitiesFromRoute**
> \BumbalClient\Model\ApiResponse removeActivitiesFromRoute($arguments)

Remove Activities From Route

Remove Activities From Route

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\RemoveActivitiesFromRouteArguments(); // \BumbalClient\Model\RemoveActivitiesFromRouteArguments | Request Arguments

try {
    $result = $api_instance->removeActivitiesFromRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->removeActivitiesFromRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RemoveActivitiesFromRouteArguments**](../Model/RemoveActivitiesFromRouteArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecurrenceRelations**
> \BumbalClient\Model\ApiResponse updateRecurrenceRelations($arguments)

Update recurrence relations for follow routes

Update recurrence relations for follow routes

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

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\UpdateRecurrenceRelations(); // \BumbalClient\Model\UpdateRecurrenceRelations | Update recurrence relations arguments

try {
    $result = $api_instance->updateRecurrenceRelations($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->updateRecurrenceRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UpdateRecurrenceRelations**](../Model/UpdateRecurrenceRelations.md)| Update recurrence relations arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

