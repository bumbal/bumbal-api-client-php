# BumbalClient\DocumentApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentIrregularities**](DocumentApi.md#documentIrregularities) | **POST** /document/irregularities | Print activity irregularities document
[**documentLoadingList**](DocumentApi.md#documentLoadingList) | **POST** /document/loading-list | Print loading list document
[**documentPackagelines**](DocumentApi.md#documentPackagelines) | **POST** /document/packagelines | Print activity package lines document
[**documentRoute**](DocumentApi.md#documentRoute) | **POST** /document/route | Print route document


# **documentIrregularities**
> \SplFileObject documentIrregularities($arguments)

Print activity irregularities document

Print activity irregularities document

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

$api_instance = new BumbalClient\Api\DocumentApi();
$arguments = new \BumbalClient\Model\IrregularitiesArguments(); // \BumbalClient\Model\IrregularitiesArguments | Request Arguments

try {
    $result = $api_instance->documentIrregularities($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIrregularities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\IrregularitiesArguments**](../Model/IrregularitiesArguments.md)| Request Arguments |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentLoadingList**
> \SplFileObject documentLoadingList($arguments)

Print loading list document

Print loading list document

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

$api_instance = new BumbalClient\Api\DocumentApi();
$arguments = new \BumbalClient\Model\LoadingListArguments(); // \BumbalClient\Model\LoadingListArguments | Request Arguments

try {
    $result = $api_instance->documentLoadingList($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentLoadingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\LoadingListArguments**](../Model/LoadingListArguments.md)| Request Arguments |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentPackagelines**
> \SplFileObject documentPackagelines($arguments)

Print activity package lines document

Print activity package lines document

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

$api_instance = new BumbalClient\Api\DocumentApi();
$arguments = new \BumbalClient\Model\PackagelinesArguments(); // \BumbalClient\Model\PackagelinesArguments | Request Arguments

try {
    $result = $api_instance->documentPackagelines($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentPackagelines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PackagelinesArguments**](../Model/PackagelinesArguments.md)| Request Arguments |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentRoute**
> \SplFileObject documentRoute($arguments)

Print route document

Print route document

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

$api_instance = new BumbalClient\Api\DocumentApi();
$arguments = new \BumbalClient\Model\RouteArguments(); // \BumbalClient\Model\RouteArguments | Request Arguments

try {
    $result = $api_instance->documentRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RouteArguments**](../Model/RouteArguments.md)| Request Arguments |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

