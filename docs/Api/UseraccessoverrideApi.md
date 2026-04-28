# BumbalClient\UseraccessoverrideApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserAccessOverride**](UseraccessoverrideApi.md#createUserAccessOverride) | **POST** /user-access-override | Add a new user access override
[**deleteUserAccessOverride**](UseraccessoverrideApi.md#deleteUserAccessOverride) | **DELETE** /user-access-override/{userAccessOverrideId} | Delete a user access override
[**retrieveListUserAccessOverride**](UseraccessoverrideApi.md#retrieveListUserAccessOverride) | **PUT** /user-access-override | Find the permissions associated with a user
[**retrieveUserAccessOverrideId**](UseraccessoverrideApi.md#retrieveUserAccessOverrideId) | **GET** /user-access-override/{userAccessOverrideId} | Retrieve a user access override
[**setUserAccessOverride**](UseraccessoverrideApi.md#setUserAccessOverride) | **POST** /user-access-override/set | Set (create or update) Role Permission
[**updateUserAccessOverride**](UseraccessoverrideApi.md#updateUserAccessOverride) | **PUT** /user-access-override/{userAccessOverrideId} | Update a user access override


# **createUserAccessOverride**
> \BumbalClient\Model\ApiResponse createUserAccessOverride($body)

Add a new user access override

Add a new user access override

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

$api_instance = new BumbalClient\Api\UseraccessoverrideApi();
$body = new \BumbalClient\Model\UserAccessOverrideModel(); // \BumbalClient\Model\UserAccessOverrideModel | User access override object that needs to be created

try {
    $result = $api_instance->createUserAccessOverride($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseraccessoverrideApi->createUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\UserAccessOverrideModel**](../Model/UserAccessOverrideModel.md)| User access override object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserAccessOverride**
> \BumbalClient\Model\ApiResponse deleteUserAccessOverride($user_access_override_id)

Delete a user access override

Delete a user access override

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

$api_instance = new BumbalClient\Api\UseraccessoverrideApi();
$user_access_override_id = 789; // int | ID of user access override to delete

try {
    $result = $api_instance->deleteUserAccessOverride($user_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseraccessoverrideApi->deleteUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_access_override_id** | **int**| ID of user access override to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListUserAccessOverride**
> \BumbalClient\Model\UserAccessOverrideModel[] retrieveListUserAccessOverride($arguments)

Find the permissions associated with a user

Returns array of UserAccessOverrideModels

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

$api_instance = new BumbalClient\Api\UseraccessoverrideApi();
$arguments = new \BumbalClient\Model\UserAccessOverrideRetrieveListArguments(); // \BumbalClient\Model\UserAccessOverrideRetrieveListArguments | User access override RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUserAccessOverride($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseraccessoverrideApi->retrieveListUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UserAccessOverrideRetrieveListArguments**](../Model/UserAccessOverrideRetrieveListArguments.md)| User access override RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UserAccessOverrideModel[]**](../Model/UserAccessOverrideModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveUserAccessOverrideId**
> \BumbalClient\Model\UserAccessOverrideModel retrieveUserAccessOverrideId($user_access_override_id)

Retrieve a user access override

Retrieve an user access override

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

$api_instance = new BumbalClient\Api\UseraccessoverrideApi();
$user_access_override_id = 789; // int | ID of user access override to retrieve

try {
    $result = $api_instance->retrieveUserAccessOverrideId($user_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseraccessoverrideApi->retrieveUserAccessOverrideId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_access_override_id** | **int**| ID of user access override to retrieve |

### Return type

[**\BumbalClient\Model\UserAccessOverrideModel**](../Model/UserAccessOverrideModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserAccessOverride**
> \BumbalClient\Model\ApiResponse setUserAccessOverride($body)

Set (create or update) Role Permission

Set (create or update) Role Permission. If a user access override with same name is found in Bumbal, the user access override id is returned.

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

$api_instance = new BumbalClient\Api\UseraccessoverrideApi();
$body = new \BumbalClient\Model\UserAccessOverrideModel(); // \BumbalClient\Model\UserAccessOverrideModel | User access override data

try {
    $result = $api_instance->setUserAccessOverride($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseraccessoverrideApi->setUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\UserAccessOverrideModel**](../Model/UserAccessOverrideModel.md)| User access override data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserAccessOverride**
> \BumbalClient\Model\ApiResponse updateUserAccessOverride($user_access_override_id)

Update a user access override

Update a user access override

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

$api_instance = new BumbalClient\Api\UseraccessoverrideApi();
$user_access_override_id = 789; // int | ID of user access override to update

try {
    $result = $api_instance->updateUserAccessOverride($user_access_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseraccessoverrideApi->updateUserAccessOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_access_override_id** | **int**| ID of user access override to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

