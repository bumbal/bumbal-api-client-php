# BumbalClient\RolepermissionApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRolePermission**](RolepermissionApi.md#createRolePermission) | **POST** /role-permission | Add a new Role permission
[**deleteRolePermission**](RolepermissionApi.md#deleteRolePermission) | **DELETE** /role-permission/{rolePermissionId} | Delete a Role permission
[**retrieveListRolePermission**](RolepermissionApi.md#retrieveListRolePermission) | **PUT** /role-permission | Find the permissions associated with a role
[**retrieveRolePermissionId**](RolepermissionApi.md#retrieveRolePermissionId) | **GET** /role-permission/{rolePermissionId} | Retrieve a Role permission
[**setRolePermission**](RolepermissionApi.md#setRolePermission) | **POST** /role-permission/set | Set (create or update) Role Permission
[**updateRolePermission**](RolepermissionApi.md#updateRolePermission) | **PUT** /role-permission/{rolePermissionId} | Update a Role permission


# **createRolePermission**
> \BumbalClient\Model\ApiResponse createRolePermission($body)

Add a new Role permission

Add a new Role permission

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

$api_instance = new BumbalClient\Api\RolepermissionApi();
$body = new \BumbalClient\Model\RolePermissionModel(); // \BumbalClient\Model\RolePermissionModel | Role permission object that needs to be created

try {
    $result = $api_instance->createRolePermission($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolepermissionApi->createRolePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RolePermissionModel**](../Model/RolePermissionModel.md)| Role permission object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRolePermission**
> \BumbalClient\Model\ApiResponse deleteRolePermission($role_permission_id)

Delete a Role permission

Delete a Role permission

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

$api_instance = new BumbalClient\Api\RolepermissionApi();
$role_permission_id = 789; // int | ID of role permission to delete

try {
    $result = $api_instance->deleteRolePermission($role_permission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolepermissionApi->deleteRolePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_permission_id** | **int**| ID of role permission to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRolePermission**
> \BumbalClient\Model\RolePermissionModel[] retrieveListRolePermission($arguments)

Find the permissions associated with a role

Returns array of RolePermissionModels

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

$api_instance = new BumbalClient\Api\RolepermissionApi();
$arguments = new \BumbalClient\Model\RolePermissionRetrieveListArguments(); // \BumbalClient\Model\RolePermissionRetrieveListArguments | Role permissions RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRolePermission($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolepermissionApi->retrieveListRolePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RolePermissionRetrieveListArguments**](../Model/RolePermissionRetrieveListArguments.md)| Role permissions RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\RolePermissionModel[]**](../Model/RolePermissionModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRolePermissionId**
> \BumbalClient\Model\RolePermissionModel retrieveRolePermissionId($role_permission_id)

Retrieve a Role permission

Retrieve an Role permission

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

$api_instance = new BumbalClient\Api\RolepermissionApi();
$role_permission_id = 789; // int | ID of role permission to retrieve

try {
    $result = $api_instance->retrieveRolePermissionId($role_permission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolepermissionApi->retrieveRolePermissionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_permission_id** | **int**| ID of role permission to retrieve |

### Return type

[**\BumbalClient\Model\RolePermissionModel**](../Model/RolePermissionModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRolePermission**
> \BumbalClient\Model\ApiResponse setRolePermission($body)

Set (create or update) Role Permission

Set (create or update) Role Permission. If a role permission with same name is found in Bumbal, the role permission id is returned.

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

$api_instance = new BumbalClient\Api\RolepermissionApi();
$body = new \BumbalClient\Model\RolePermissionModel(); // \BumbalClient\Model\RolePermissionModel | Role permission data

try {
    $result = $api_instance->setRolePermission($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolepermissionApi->setRolePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RolePermissionModel**](../Model/RolePermissionModel.md)| Role permission data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRolePermission**
> \BumbalClient\Model\ApiResponse updateRolePermission($role_permission_id)

Update a Role permission

Update a Role permission

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

$api_instance = new BumbalClient\Api\RolepermissionApi();
$role_permission_id = 789; // int | ID of role permission to update

try {
    $result = $api_instance->updateRolePermission($role_permission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolepermissionApi->updateRolePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_permission_id** | **int**| ID of role permission to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

