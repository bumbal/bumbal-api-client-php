# BumbalClient\ResourceroleaccessoverrideApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResourceRoleAccessOverride**](ResourceroleaccessoverrideApi.md#createResourceRoleAccessOverride) | **POST** /resource-role-access-override | Add a new role access override
[**deleteResourceRoleAccessOverride**](ResourceroleaccessoverrideApi.md#deleteResourceRoleAccessOverride) | **DELETE** /resource-role-access-override/{resourceRoleAccessOverrideId} | Delete a role access override
[**retrieveListResourceRoleAccessOverride**](ResourceroleaccessoverrideApi.md#retrieveListResourceRoleAccessOverride) | **PUT** /resource-role-access-override | Find the permissions associated with a user
[**retrieveResourceRoleAccessOverrideId**](ResourceroleaccessoverrideApi.md#retrieveResourceRoleAccessOverrideId) | **GET** /resource-role-access-override/{resourceRoleAccessOverrideId} | Retrieve a role access override
[**setResourceRoleAccessOverride**](ResourceroleaccessoverrideApi.md#setResourceRoleAccessOverride) | **POST** /resource-role-access-override/set | Set (create or update) role access override
[**updateResourceRoleAccessOverride**](ResourceroleaccessoverrideApi.md#updateResourceRoleAccessOverride) | **PUT** /resource-role-access-override/{resourceRoleAccessOverrideId} | Update a role access override


# **createResourceRoleAccessOverride**
> \BumbalClient\Model\ApiResponse createResourceRoleAccessOverride($body)

Add a new role access override

Add a new role access override

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

$api_instance = new BumbalClient\Api\ResourceroleaccessoverrideApi();
$body = new \BumbalClient\Model\ResourceRoleAccessOverrideModel(); // \BumbalClient\Model\ResourceRoleAccessOverrideModel | Resource role access override object that needs to be created

try {
    $result = $api_instance->createResourceRoleAccessOverride($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceroleaccessoverrideApi->createResourceRoleAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ResourceRoleAccessOverrideModel**](../Model/ResourceRoleAccessOverrideModel.md)| Resource role access override object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResourceRoleAccessOverride**
> \BumbalClient\Model\ApiResponse deleteResourceRoleAccessOverride($resource_role_access_override_id)

Delete a role access override

Delete a role access override

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

$api_instance = new BumbalClient\Api\ResourceroleaccessoverrideApi();
$resource_role_access_override_id = 789; // int | ID of role access override to delete

try {
    $result = $api_instance->deleteResourceRoleAccessOverride($resource_role_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceroleaccessoverrideApi->deleteResourceRoleAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_role_access_override_id** | **int**| ID of role access override to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListResourceRoleAccessOverride**
> \BumbalClient\Model\ResourceRoleAccessOverrideModel[] retrieveListResourceRoleAccessOverride($arguments)

Find the permissions associated with a user

Returns array of ResourceRoleAccessOverrideModels

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

$api_instance = new BumbalClient\Api\ResourceroleaccessoverrideApi();
$arguments = new \BumbalClient\Model\ResourceRoleAccessOverrideRetrieveListArguments(); // \BumbalClient\Model\ResourceRoleAccessOverrideRetrieveListArguments | Resource role access override RetrieveList Arguments

try {
    $result = $api_instance->retrieveListResourceRoleAccessOverride($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceroleaccessoverrideApi->retrieveListResourceRoleAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ResourceRoleAccessOverrideRetrieveListArguments**](../Model/ResourceRoleAccessOverrideRetrieveListArguments.md)| Resource role access override RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ResourceRoleAccessOverrideModel[]**](../Model/ResourceRoleAccessOverrideModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveResourceRoleAccessOverrideId**
> \BumbalClient\Model\ResourceRoleAccessOverrideModel retrieveResourceRoleAccessOverrideId($resource_role_access_override_id)

Retrieve a role access override

Retrieve a role access override

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

$api_instance = new BumbalClient\Api\ResourceroleaccessoverrideApi();
$resource_role_access_override_id = 789; // int | ID of role access override to retrieve

try {
    $result = $api_instance->retrieveResourceRoleAccessOverrideId($resource_role_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceroleaccessoverrideApi->retrieveResourceRoleAccessOverrideId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_role_access_override_id** | **int**| ID of role access override to retrieve |

### Return type

[**\BumbalClient\Model\ResourceRoleAccessOverrideModel**](../Model/ResourceRoleAccessOverrideModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setResourceRoleAccessOverride**
> \BumbalClient\Model\ApiResponse setResourceRoleAccessOverride($body)

Set (create or update) role access override

Set (create or update) role access override. If a role access override with same name is found in Bumbal, the role access override id is returned.

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

$api_instance = new BumbalClient\Api\ResourceroleaccessoverrideApi();
$body = new \BumbalClient\Model\ResourceRoleAccessOverrideModel(); // \BumbalClient\Model\ResourceRoleAccessOverrideModel | Resource role access override data

try {
    $result = $api_instance->setResourceRoleAccessOverride($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceroleaccessoverrideApi->setResourceRoleAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ResourceRoleAccessOverrideModel**](../Model/ResourceRoleAccessOverrideModel.md)| Resource role access override data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateResourceRoleAccessOverride**
> \BumbalClient\Model\ApiResponse updateResourceRoleAccessOverride($resource_role_access_override_id)

Update a role access override

Update a role access override

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

$api_instance = new BumbalClient\Api\ResourceroleaccessoverrideApi();
$resource_role_access_override_id = 789; // int | ID of role access override to update

try {
    $result = $api_instance->updateResourceRoleAccessOverride($resource_role_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceroleaccessoverrideApi->updateResourceRoleAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_role_access_override_id** | **int**| ID of role access override to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

