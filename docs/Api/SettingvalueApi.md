# BumbalClient\SettingvalueApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListSetting**](SettingvalueApi.md#retrieveListSetting) | **PUT** /setting-value | Retrieve list of settings
[**retrieveSetting**](SettingvalueApi.md#retrieveSetting) | **GET** /setting-value/{key} | Retrieve a setting by key
[**retrieveSettingOptions**](SettingvalueApi.md#retrieveSettingOptions) | **PUT** /setting-value/{key}/options | Retrieve possible option values for a setting
[**setSetting**](SettingvalueApi.md#setSetting) | **POST** /setting-value/set | Set (create or update) a setting value


# **retrieveListSetting**
> \BumbalClient\Model\SettingListResponse retrieveListSetting($arguments)

Retrieve list of settings

Returns a list of settings with effective values resolved. Filter by category, specific keys, or include deprecated.

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

$api_instance = new BumbalClient\Api\SettingvalueApi();
$arguments = new \BumbalClient\Model\SettingRetrieveListArguments(); // \BumbalClient\Model\SettingRetrieveListArguments | Filter and pagination arguments

try {
    $result = $api_instance->retrieveListSetting($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingvalueApi->retrieveListSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\SettingRetrieveListArguments**](../Model/SettingRetrieveListArguments.md)| Filter and pagination arguments |

### Return type

[**\BumbalClient\Model\SettingListResponse**](../Model/SettingListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSetting**
> \BumbalClient\Model\SettingModel retrieveSetting($key)

Retrieve a setting by key

Returns the effective value, explicit tenant override (if any), and definition metadata for a single setting.

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

$api_instance = new BumbalClient\Api\SettingvalueApi();
$key = "key_example"; // string | Setting key

try {
    $result = $api_instance->retrieveSetting($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingvalueApi->retrieveSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Setting key |

### Return type

[**\BumbalClient\Model\SettingModel**](../Model/SettingModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSettingOptions**
> \BumbalClient\Model\InlineResponse2002 retrieveSettingOptions($key, $arguments)

Retrieve possible option values for a setting

Returns the resolved list of possible option values for the given setting definition, based on its option_source and option_provider. Supports search_text filtering and limit/offset pagination.

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

$api_instance = new BumbalClient\Api\SettingvalueApi();
$key = "key_example"; // string | Setting key
$arguments = new \BumbalClient\Model\SettingOptionsArguments(); // \BumbalClient\Model\SettingOptionsArguments | Pagination and search arguments

try {
    $result = $api_instance->retrieveSettingOptions($key, $arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingvalueApi->retrieveSettingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Setting key |
 **arguments** | [**\BumbalClient\Model\SettingOptionsArguments**](../Model/SettingOptionsArguments.md)| Pagination and search arguments | [optional]

### Return type

[**\BumbalClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSetting**
> \BumbalClient\Model\ApiResponse setSetting($body)

Set (create or update) a setting value

Upserts a tenant override for the given setting key. If no override exists it is created; otherwise the existing value is updated.

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

$api_instance = new BumbalClient\Api\SettingvalueApi();
$body = new \BumbalClient\Model\SettingValueSetModel(); // \BumbalClient\Model\SettingValueSetModel | Setting key and value

try {
    $result = $api_instance->setSetting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingvalueApi->setSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\SettingValueSetModel**](../Model/SettingValueSetModel.md)| Setting key and value |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

