# BumbalClient\AssignmentApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAssignment**](AssignmentApi.md#deleteAssignment) | **DELETE** /assignment/{assignmentId} | Delete an assignment
[**retrieveAssignment**](AssignmentApi.md#retrieveAssignment) | **GET** /assignment/{assignmentId} | Find assignment by ID
[**retrieveListAssignment**](AssignmentApi.md#retrieveListAssignment) | **PUT** /assignment | Retrieve List of Assignments
[**setAssignment**](AssignmentApi.md#setAssignment) | **POST** /assignment/set | Set (create or update) an Assignment
[**updateAssignment**](AssignmentApi.md#updateAssignment) | **PUT** /assignment/{assignmentId} | Update a assignment


# **deleteAssignment**
> \BumbalClient\Model\ApiResponse deleteAssignment($assignment_id)

Delete an assignment

Delete an assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AssignmentApi();
$assignment_id = 789; // int | ID of the assignment to delete

try {
    $result = $api_instance->deleteAssignment($assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->deleteAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of the assignment to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAssignment**
> \BumbalClient\Model\AssignmentModel retrieveAssignment($assignment_id, $include_activities, $include_meta_data, $include_links, $include_files, $include_tag_ids, $include_tag_names, $include_booking_account, $include_record_info, $include_record_object)

Find assignment by ID

Returns a single assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AssignmentApi();
$assignment_id = 789; // int | ID of assignment to return
$include_activities = false; // bool | Include activities belonging to assignment
$include_meta_data = false; // bool | Include meta data
$include_links = false; // bool | Include links
$include_files = false; // bool | Include files
$include_tag_ids = false; // bool | Include tag ids
$include_tag_names = false; // bool | Include tag names
$include_booking_account = false; // bool | Include booking account
$include_record_info = false; // bool | Include record info
$include_record_object = false; // bool | Include record object

try {
    $result = $api_instance->retrieveAssignment($assignment_id, $include_activities, $include_meta_data, $include_links, $include_files, $include_tag_ids, $include_tag_names, $include_booking_account, $include_record_info, $include_record_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->retrieveAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of assignment to return |
 **include_activities** | **bool**| Include activities belonging to assignment | [optional] [default to false]
 **include_meta_data** | **bool**| Include meta data | [optional] [default to false]
 **include_links** | **bool**| Include links | [optional] [default to false]
 **include_files** | **bool**| Include files | [optional] [default to false]
 **include_tag_ids** | **bool**| Include tag ids | [optional] [default to false]
 **include_tag_names** | **bool**| Include tag names | [optional] [default to false]
 **include_booking_account** | **bool**| Include booking account | [optional] [default to false]
 **include_record_info** | **bool**| Include record info | [optional] [default to false]
 **include_record_object** | **bool**| Include record object | [optional] [default to false]

### Return type

[**\BumbalClient\Model\AssignmentModel**](../Model/AssignmentModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAssignment**
> \BumbalClient\Model\AssignmentListResponse retrieveListAssignment($arguments)

Retrieve List of Assignments

Retrieve List of Assignments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AssignmentApi();
$arguments = new \BumbalClient\Model\AssignmentRetrieveListArguments(); // \BumbalClient\Model\AssignmentRetrieveListArguments | Assignment RetrieveList Arguments

try {
    $result = $api_instance->retrieveListAssignment($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->retrieveListAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AssignmentRetrieveListArguments**](../Model/AssignmentRetrieveListArguments.md)| Assignment RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\AssignmentListResponse**](../Model/AssignmentListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAssignment**
> \BumbalClient\Model\ApiResponse setAssignment($body)

Set (create or update) an Assignment

Set (create or update) an Assignment. If id or links are set in the data, and a corresponding assignment is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AssignmentApi();
$body = new \BumbalClient\Model\AssignmentModel(); // \BumbalClient\Model\AssignmentModel | Assignment object

try {
    $result = $api_instance->setAssignment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->setAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\AssignmentModel**](../Model/AssignmentModel.md)| Assignment object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAssignment**
> \BumbalClient\Model\ApiResponse updateAssignment($assignment_id, $body)

Update a assignment

Update a assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AssignmentApi();
$assignment_id = 789; // int | ID of assignment to update
$body = new \BumbalClient\Model\AssignmentModel(); // \BumbalClient\Model\AssignmentModel | Assignment object that needs to be updated

try {
    $result = $api_instance->updateAssignment($assignment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->updateAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of assignment to update |
 **body** | [**\BumbalClient\Model\AssignmentModel**](../Model/AssignmentModel.md)| Assignment object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

