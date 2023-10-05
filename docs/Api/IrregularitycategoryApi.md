# BumbalClient\IrregularitycategoryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIrregularityCategory**](IrregularitycategoryApi.md#createIrregularityCategory) | **POST** /irregularity-category/set | Create a irregularity category
[**deleteIrregularityCategory**](IrregularitycategoryApi.md#deleteIrregularityCategory) | **DELETE** /irregularity-category/{irregularityCategoryId} | Delete a irregularity category
[**retrieveIrregularityCategory**](IrregularitycategoryApi.md#retrieveIrregularityCategory) | **GET** /irregularity-category/{irregularityCategoryId} | Retrieve a irregularity category
[**retrieveListIrregularityCategory**](IrregularitycategoryApi.md#retrieveListIrregularityCategory) | **PUT** /irregularity-category | Retrieve list of irregularity categories


# **createIrregularityCategory**
> \BumbalClient\Model\ApiResponse createIrregularityCategory($body)

Create a irregularity category

Create a category for a irregularities

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

$api_instance = new BumbalClient\Api\IrregularitycategoryApi();
$body = new \BumbalClient\Model\IrregularityCategoryModel(); // \BumbalClient\Model\IrregularityCategoryModel | IrregularityCategory object

try {
    $result = $api_instance->createIrregularityCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularitycategoryApi->createIrregularityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\IrregularityCategoryModel**](../Model/IrregularityCategoryModel.md)| IrregularityCategory object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIrregularityCategory**
> \BumbalClient\Model\ApiResponse deleteIrregularityCategory($irregularity_category_id)

Delete a irregularity category

Delete a irregularity category

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

$api_instance = new BumbalClient\Api\IrregularitycategoryApi();
$irregularity_category_id = 789; // int | ID of the irregularity category to delete

try {
    $result = $api_instance->deleteIrregularityCategory($irregularity_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularitycategoryApi->deleteIrregularityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **irregularity_category_id** | **int**| ID of the irregularity category to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveIrregularityCategory**
> \BumbalClient\Model\IrregularityCategoryModel retrieveIrregularityCategory($irregularity_category_id)

Retrieve a irregularity category

Retrieve a irregularity category

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

$api_instance = new BumbalClient\Api\IrregularitycategoryApi();
$irregularity_category_id = 789; // int | ID of irregularity category to return

try {
    $result = $api_instance->retrieveIrregularityCategory($irregularity_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularitycategoryApi->retrieveIrregularityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **irregularity_category_id** | **int**| ID of irregularity category to return |

### Return type

[**\BumbalClient\Model\IrregularityCategoryModel**](../Model/IrregularityCategoryModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListIrregularityCategory**
> \BumbalClient\Model\IrregularityCategoryListResponse retrieveListIrregularityCategory($arguments)

Retrieve list of irregularity categories

Retrieve list of irregularity categories

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

$api_instance = new BumbalClient\Api\IrregularitycategoryApi();
$arguments = new \BumbalClient\Model\IrregularityCategoryRetrieveListArguments(); // \BumbalClient\Model\IrregularityCategoryRetrieveListArguments | Irregularity category RetrieveList Arguments

try {
    $result = $api_instance->retrieveListIrregularityCategory($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IrregularitycategoryApi->retrieveListIrregularityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\IrregularityCategoryRetrieveListArguments**](../Model/IrregularityCategoryRetrieveListArguments.md)| Irregularity category RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\IrregularityCategoryListResponse**](../Model/IrregularityCategoryListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

