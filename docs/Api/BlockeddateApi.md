# BumbalClient\BlockeddateApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBlockedDate**](BlockeddateApi.md#deleteBlockedDate) | **DELETE** /blocked-date/{blockedDateId} | Delete a blocked date
[**retrieveListBlockedDate**](BlockeddateApi.md#retrieveListBlockedDate) | **PUT** /blocked-date | Retrieve List of blocked dates
[**setBlockedDate**](BlockeddateApi.md#setBlockedDate) | **POST** /blocked-date/set | Set (create or update) a blocked date


# **deleteBlockedDate**
> \BumbalClient\Model\ApiResponse deleteBlockedDate($blocked_date_id)

Delete a blocked date

Delete a blocked date

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

$api_instance = new BumbalClient\Api\BlockeddateApi();
$blocked_date_id = 789; // int | ID of blocked date to delete

try {
    $result = $api_instance->deleteBlockedDate($blocked_date_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockeddateApi->deleteBlockedDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blocked_date_id** | **int**| ID of blocked date to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListBlockedDate**
> \BumbalClient\Model\BlockedDateListResponse retrieveListBlockedDate($arguments)

Retrieve List of blocked dates

Retrieve List of blocked dates

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

$api_instance = new BumbalClient\Api\BlockeddateApi();
$arguments = new \BumbalClient\Model\BlockedDateRetrieveListArguments(); // \BumbalClient\Model\BlockedDateRetrieveListArguments | Blocked date RetrieveList Arguments

try {
    $result = $api_instance->retrieveListBlockedDate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockeddateApi->retrieveListBlockedDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\BlockedDateRetrieveListArguments**](../Model/BlockedDateRetrieveListArguments.md)| Blocked date RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\BlockedDateListResponse**](../Model/BlockedDateListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBlockedDate**
> \BumbalClient\Model\ApiResponse setBlockedDate($body)

Set (create or update) a blocked date

Set (create or update) a blocked date.

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

$api_instance = new BumbalClient\Api\BlockeddateApi();
$body = new \BumbalClient\Model\BlockedDateModel(); // \BumbalClient\Model\BlockedDateModel | Blocked date object object

try {
    $result = $api_instance->setBlockedDate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockeddateApi->setBlockedDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\BlockedDateModel**](../Model/BlockedDateModel.md)| Blocked date object object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

