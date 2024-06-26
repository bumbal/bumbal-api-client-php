# BumbalClient\UsersApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkCredentialsUser**](UsersApi.md#checkCredentialsUser) | **GET** /users/check-credentials | Checks the credentials of a User
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /users/{userId} | Delete a user
[**retrieveListUserNotification**](UsersApi.md#retrieveListUserNotification) | **PUT** /users/notification | Retrieve List of UserNotification
[**retrieveListUsers**](UsersApi.md#retrieveListUsers) | **PUT** /users | Retrieve List of Users
[**retrieveUsers**](UsersApi.md#retrieveUsers) | **GET** /users/{userId} | Retrieve a Users
[**setUser**](UsersApi.md#setUser) | **POST** /users/set | Set (create or update) a User
[**setUserNotification**](UsersApi.md#setUserNotification) | **POST** /users/notification | Create a new UserNotification or update an existing one
[**updateUsers**](UsersApi.md#updateUsers) | **PUT** /users/{userId} | Update a Users


# **checkCredentialsUser**
> \BumbalClient\Model\UsersModel checkCredentialsUser($email, $password)

Checks the credentials of a User

Checks the credentials of a User

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

$api_instance = new BumbalClient\Api\UsersApi();
$email = "email_example"; // string | User Email
$password = "password_example"; // string | User Password

try {
    $result = $api_instance->checkCredentialsUser($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->checkCredentialsUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User Email |
 **password** | **string**| User Password |

### Return type

[**\BumbalClient\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \BumbalClient\Model\ApiResponse deleteUser($user_id)

Delete a user

Delete a user

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

$api_instance = new BumbalClient\Api\UsersApi();
$user_id = 789; // int | ID of user to delete

try {
    $result = $api_instance->deleteUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of user to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListUserNotification**
> \BumbalClient\Model\UserNotificationListResponse retrieveListUserNotification($arguments)

Retrieve List of UserNotification

Retrieve List of UserNotification

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

$api_instance = new BumbalClient\Api\UsersApi();
$arguments = new \BumbalClient\Model\UserNotificationRetrieveListArguments(); // \BumbalClient\Model\UserNotificationRetrieveListArguments | UserNotification RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUserNotification($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->retrieveListUserNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UserNotificationRetrieveListArguments**](../Model/UserNotificationRetrieveListArguments.md)| UserNotification RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UserNotificationListResponse**](../Model/UserNotificationListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListUsers**
> \BumbalClient\Model\UsersListResponse retrieveListUsers($arguments)

Retrieve List of Users

Retrieve List of Users

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

$api_instance = new BumbalClient\Api\UsersApi();
$arguments = new \BumbalClient\Model\UsersRetrieveListArguments(); // \BumbalClient\Model\UsersRetrieveListArguments | Users RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUsers($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->retrieveListUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UsersRetrieveListArguments**](../Model/UsersRetrieveListArguments.md)| Users RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UsersListResponse**](../Model/UsersListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveUsers**
> \BumbalClient\Model\UsersModel retrieveUsers($user_id, $include_addresses, $include_user_meta_data, $include_user_tags, $include_party_name, $include_pause, $include_zones, $include_driver_unavailabilities, $include_links)

Retrieve a Users

Retrieve a Users

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

$api_instance = new BumbalClient\Api\UsersApi();
$user_id = 789; // int | ID of users to retrieve
$include_addresses = false; // bool | Include address data
$include_user_meta_data = false; // bool | Include Meta Data
$include_user_tags = false; // bool | Include tags
$include_party_name = false; // bool | Include Party Name
$include_pause = false; // bool | Include Pause
$include_zones = false; // bool | Include Zones
$include_driver_unavailabilities = false; // bool | Include Driver Unavailabilities
$include_links = false; // bool | Include Links

try {
    $result = $api_instance->retrieveUsers($user_id, $include_addresses, $include_user_meta_data, $include_user_tags, $include_party_name, $include_pause, $include_zones, $include_driver_unavailabilities, $include_links);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->retrieveUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of users to retrieve |
 **include_addresses** | **bool**| Include address data | [optional] [default to false]
 **include_user_meta_data** | **bool**| Include Meta Data | [optional] [default to false]
 **include_user_tags** | **bool**| Include tags | [optional] [default to false]
 **include_party_name** | **bool**| Include Party Name | [optional] [default to false]
 **include_pause** | **bool**| Include Pause | [optional] [default to false]
 **include_zones** | **bool**| Include Zones | [optional] [default to false]
 **include_driver_unavailabilities** | **bool**| Include Driver Unavailabilities | [optional] [default to false]
 **include_links** | **bool**| Include Links | [optional] [default to false]

### Return type

[**\BumbalClient\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUser**
> \BumbalClient\Model\ApiResponse setUser($body)

Set (create or update) a User

Set (create or update) a User. If id or links are set in the data, and a corresponding users is found in Bumbal, an update will be performed.

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

$api_instance = new BumbalClient\Api\UsersApi();
$body = new \BumbalClient\Model\UsersModel(); // \BumbalClient\Model\UsersModel | User object

try {
    $result = $api_instance->setUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\UsersModel**](../Model/UsersModel.md)| User object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserNotification**
> \BumbalClient\Model\ApiResponse56 setUserNotification($body)

Create a new UserNotification or update an existing one

Set (create or update) a user notification. If id or links are set in the data, and a corresponding user notification is found in Bumbal, an update will be performed.

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

$api_instance = new BumbalClient\Api\UsersApi();
$body = new \BumbalClient\Model\UserNotificationModel(); // \BumbalClient\Model\UserNotificationModel | UserNotification object that needs to be set

try {
    $result = $api_instance->setUserNotification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\UserNotificationModel**](../Model/UserNotificationModel.md)| UserNotification object that needs to be set | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse56**](../Model/ApiResponse56.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsers**
> \BumbalClient\Model\ApiResponse updateUsers($user_id)

Update a Users

Update a Setting

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

$api_instance = new BumbalClient\Api\UsersApi();
$user_id = 789; // int | ID of users to update

try {
    $result = $api_instance->updateUsers($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of users to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

