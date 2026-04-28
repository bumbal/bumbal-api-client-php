# BumbalClient\AdHocEventApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAdHocEvent**](AdHocEventApi.md#deleteAdHocEvent) | **DELETE** /adhoc-events/{adHocEventId} | Delete an ad-hoc event
[**retrieveAdHocEvent**](AdHocEventApi.md#retrieveAdHocEvent) | **GET** /adhoc-events/{adHocEventId} | Find ad-hoc events by ID
[**retrieveListAdHocEvent**](AdHocEventApi.md#retrieveListAdHocEvent) | **PUT** /adhoc-events | Retrieve List of Ad-Hoc events
[**setAdHocEvent**](AdHocEventApi.md#setAdHocEvent) | **POST** /adhoc-events/set | Set (create or update) an adhoc event


# **deleteAdHocEvent**
> \BumbalClient\Model\ApiResponse deleteAdHocEvent($ad_hoc_event_id)

Delete an ad-hoc event

Delete an ad-hoc event

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

$api_instance = new BumbalClient\Api\AdHocEventApi();
$ad_hoc_event_id = 789; // int | ID of the ad-hoc event to delete

try {
    $result = $api_instance->deleteAdHocEvent($ad_hoc_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdHocEventApi->deleteAdHocEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_hoc_event_id** | **int**| ID of the ad-hoc event to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAdHocEvent**
> \BumbalClient\Model\AdHocEventModel retrieveAdHocEvent($ad_hoc_event_id)

Find ad-hoc events by ID

Retrieve a adhoc event by id

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

$api_instance = new BumbalClient\Api\AdHocEventApi();
$ad_hoc_event_id = 789; // int | ID of the ad-hoc event to retrieve

try {
    $result = $api_instance->retrieveAdHocEvent($ad_hoc_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdHocEventApi->retrieveAdHocEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_hoc_event_id** | **int**| ID of the ad-hoc event to retrieve |

### Return type

[**\BumbalClient\Model\AdHocEventModel**](../Model/AdHocEventModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAdHocEvent**
> \BumbalClient\Model\AdHocEventListResponse retrieveListAdHocEvent($arguments)

Retrieve List of Ad-Hoc events

Retrieve List of Ad-Hoc events

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

$api_instance = new BumbalClient\Api\AdHocEventApi();
$arguments = new \BumbalClient\Model\AdHocEventRetrieveListArguments(); // \BumbalClient\Model\AdHocEventRetrieveListArguments | AdHoc Event Retrieve List Arguments

try {
    $result = $api_instance->retrieveListAdHocEvent($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdHocEventApi->retrieveListAdHocEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AdHocEventRetrieveListArguments**](../Model/AdHocEventRetrieveListArguments.md)| AdHoc Event Retrieve List Arguments |

### Return type

[**\BumbalClient\Model\AdHocEventListResponse**](../Model/AdHocEventListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAdHocEvent**
> \BumbalClient\Model\ApiResponse setAdHocEvent($body)

Set (create or update) an adhoc event

Set Adhoc Event

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

$api_instance = new BumbalClient\Api\AdHocEventApi();
$body = new \BumbalClient\Model\AdHocEventModel(); // \BumbalClient\Model\AdHocEventModel | Driver object

try {
    $result = $api_instance->setAdHocEvent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdHocEventApi->setAdHocEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\AdHocEventModel**](../Model/AdHocEventModel.md)| Driver object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

