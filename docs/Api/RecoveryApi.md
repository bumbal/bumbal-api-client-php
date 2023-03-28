# BumbalClient\RecoveryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRecovery**](RecoveryApi.md#createRecovery) | **POST** /recovery | Add a new Recovery
[**deleteRecovery**](RecoveryApi.md#deleteRecovery) | **DELETE** /recovery/{recoveryId} | Delete a Recovery
[**retrieveListRecovery**](RecoveryApi.md#retrieveListRecovery) | **PUT** /recovery | Retrieve List of Recoveries
[**retrieveRecovery**](RecoveryApi.md#retrieveRecovery) | **GET** /recovery/{recoveryId} | Retrieve a Recovery
[**setRecovery**](RecoveryApi.md#setRecovery) | **POST** /recovery/set | Set (create or update) a Recovery
[**updateRecovery**](RecoveryApi.md#updateRecovery) | **PUT** /recovery/{recoveryId} | Update a Recovery


# **createRecovery**
> \BumbalClient\Model\ApiResponse createRecovery($body)

Add a new Recovery

Add a new Recovery

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

$api_instance = new BumbalClient\Api\RecoveryApi();
$body = new \BumbalClient\Model\RecoveryModel(); // \BumbalClient\Model\RecoveryModel | Recovery object that needs to be created

try {
    $result = $api_instance->createRecovery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryApi->createRecovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RecoveryModel**](../Model/RecoveryModel.md)| Recovery object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecovery**
> \BumbalClient\Model\ApiResponse deleteRecovery($recovery_id)

Delete a Recovery

Delete a Recovery

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

$api_instance = new BumbalClient\Api\RecoveryApi();
$recovery_id = 789; // int | ID of recovery to delete

try {
    $result = $api_instance->deleteRecovery($recovery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryApi->deleteRecovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recovery_id** | **int**| ID of recovery to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRecovery**
> \BumbalClient\Model\RecoveryListResponse retrieveListRecovery($arguments)

Retrieve List of Recoveries

Retrieve List of Recoveries

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

$api_instance = new BumbalClient\Api\RecoveryApi();
$arguments = new \BumbalClient\Model\RecoveryRetrieveListArguments(); // \BumbalClient\Model\RecoveryRetrieveListArguments | Recovery RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRecovery($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryApi->retrieveListRecovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RecoveryRetrieveListArguments**](../Model/RecoveryRetrieveListArguments.md)| Recovery RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\RecoveryListResponse**](../Model/RecoveryListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRecovery**
> \BumbalClient\Model\RecoveryModel retrieveRecovery($recovery_id)

Retrieve a Recovery

Retrieve an Recovery

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

$api_instance = new BumbalClient\Api\RecoveryApi();
$recovery_id = 789; // int | ID of recovery to retrieve

try {
    $result = $api_instance->retrieveRecovery($recovery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryApi->retrieveRecovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recovery_id** | **int**| ID of recovery to retrieve |

### Return type

[**\BumbalClient\Model\RecoveryModel**](../Model/RecoveryModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRecovery**
> \BumbalClient\Model\ApiResponse setRecovery($body)

Set (create or update) a Recovery

Set (create or update) a Recovery. If id or links are set in the data, and a corresponding recovery is found in Bumbal, an update will be performed.

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

$api_instance = new BumbalClient\Api\RecoveryApi();
$body = new \BumbalClient\Model\RecoveryModel(); // \BumbalClient\Model\RecoveryModel | Recovery object

try {
    $result = $api_instance->setRecovery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryApi->setRecovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RecoveryModel**](../Model/RecoveryModel.md)| Recovery object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecovery**
> \BumbalClient\Model\ApiResponse updateRecovery($recovery_id)

Update a Recovery

Update an Recovery

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

$api_instance = new BumbalClient\Api\RecoveryApi();
$recovery_id = 789; // int | ID of recovery to update

try {
    $result = $api_instance->updateRecovery($recovery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryApi->updateRecovery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recovery_id** | **int**| ID of recovery to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

