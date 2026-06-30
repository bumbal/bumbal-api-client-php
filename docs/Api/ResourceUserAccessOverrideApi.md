# BumbalClient\ResourceUserAccessOverrideApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResourceUserAccessOverride**](ResourceUserAccessOverrideApi.md#createResourceUserAccessOverride) | **POST** /resource-user-access-override | Add a new user access override
[**deleteResourceUserAccessOverride**](ResourceUserAccessOverrideApi.md#deleteResourceUserAccessOverride) | **DELETE** /resource-user-access-override/{resourceRoleAccessOverrideId} | Delete a user access override
[**retrieveListResourceUserAccessOverride**](ResourceUserAccessOverrideApi.md#retrieveListResourceUserAccessOverride) | **PUT** /resource-user-access-override | Find the permissions associated with a user
[**retrieveResourceUserAccessOverrideId**](ResourceUserAccessOverrideApi.md#retrieveResourceUserAccessOverrideId) | **GET** /resource-user-access-override/{resourceRoleAccessOverrideId} | Retrieve a user access override
[**setResourceUserAccessOverride**](ResourceUserAccessOverrideApi.md#setResourceUserAccessOverride) | **POST** /resource-user-access-override/set | Set (create or update) user access override
[**updateResourceUserAccessOverride**](ResourceUserAccessOverrideApi.md#updateResourceUserAccessOverride) | **PUT** /resource-user-access-override/{resourceRoleAccessOverrideId} | Update a user access override


# **createResourceUserAccessOverride**
> \BumbalClient\Model\ApiResponse createResourceUserAccessOverride($body)

Add a new user access override

Add a new user access override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\ResourceUserAccessOverrideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\ResourceUserAccessOverrideModel(); // \BumbalClient\Model\ResourceUserAccessOverrideModel | Resource user access override object that needs to be created

try {
    $result = $apiInstance->createResourceUserAccessOverride($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceUserAccessOverrideApi->createResourceUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ResourceUserAccessOverrideModel**](../Model/ResourceUserAccessOverrideModel.md)| Resource user access override object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResourceUserAccessOverride**
> \BumbalClient\Model\ApiResponse deleteResourceUserAccessOverride($resource_role_access_override_id)

Delete a user access override

Delete a user access override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\ResourceUserAccessOverrideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_role_access_override_id = 789; // int | ID of user access override to delete

try {
    $result = $apiInstance->deleteResourceUserAccessOverride($resource_role_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceUserAccessOverrideApi->deleteResourceUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_role_access_override_id** | **int**| ID of user access override to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListResourceUserAccessOverride**
> \BumbalClient\Model\ResourceUserAccessOverrideModel[] retrieveListResourceUserAccessOverride($arguments)

Find the permissions associated with a user

Returns array of ResourceUserAccessOverrideModels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\ResourceUserAccessOverrideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\ResourceUserAccessOverrideRetrieveListArguments(); // \BumbalClient\Model\ResourceUserAccessOverrideRetrieveListArguments | Resource user access override RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListResourceUserAccessOverride($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceUserAccessOverrideApi->retrieveListResourceUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ResourceUserAccessOverrideRetrieveListArguments**](../Model/ResourceUserAccessOverrideRetrieveListArguments.md)| Resource user access override RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ResourceUserAccessOverrideModel[]**](../Model/ResourceUserAccessOverrideModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveResourceUserAccessOverrideId**
> \BumbalClient\Model\ResourceUserAccessOverrideModel retrieveResourceUserAccessOverrideId($resource_role_access_override_id)

Retrieve a user access override

Retrieve a user access override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\ResourceUserAccessOverrideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_role_access_override_id = 789; // int | ID of user access override to retrieve

try {
    $result = $apiInstance->retrieveResourceUserAccessOverrideId($resource_role_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceUserAccessOverrideApi->retrieveResourceUserAccessOverrideId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_role_access_override_id** | **int**| ID of user access override to retrieve |

### Return type

[**\BumbalClient\Model\ResourceUserAccessOverrideModel**](../Model/ResourceUserAccessOverrideModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setResourceUserAccessOverride**
> \BumbalClient\Model\ApiResponse setResourceUserAccessOverride($body)

Set (create or update) user access override

Set (create or update) user access override. If a user access override with same name is found in Bumbal, the user access override id is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\ResourceUserAccessOverrideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\ResourceUserAccessOverrideModel(); // \BumbalClient\Model\ResourceUserAccessOverrideModel | Resource user access override data

try {
    $result = $apiInstance->setResourceUserAccessOverride($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceUserAccessOverrideApi->setResourceUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ResourceUserAccessOverrideModel**](../Model/ResourceUserAccessOverrideModel.md)| Resource user access override data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResourceUserAccessOverride**
> \BumbalClient\Model\ApiResponse updateResourceUserAccessOverride($resource_role_access_override_id)

Update a user access override

Update a user access override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\ResourceUserAccessOverrideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_role_access_override_id = 789; // int | ID of user access override to update

try {
    $result = $apiInstance->updateResourceUserAccessOverride($resource_role_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceUserAccessOverrideApi->updateResourceUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_role_access_override_id** | **int**| ID of user access override to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

