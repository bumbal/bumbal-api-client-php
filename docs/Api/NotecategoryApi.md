# BumbalClient\NotecategoryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNoteCategory**](NotecategoryApi.md#deleteNoteCategory) | **DELETE** /note-category/{noteCategoryId} | Delete a note-category
[**retrieveListNoteCategory**](NotecategoryApi.md#retrieveListNoteCategory) | **PUT** /note-category | Retrieve List of NoteCategories
[**retrieveNoteCategory**](NotecategoryApi.md#retrieveNoteCategory) | **GET** /note-category/{noteCategoryId} | Find note-category by ID
[**setNoteCategory**](NotecategoryApi.md#setNoteCategory) | **POST** /note-category/set | Set (create or update) an NoteCategory


# **deleteNoteCategory**
> \BumbalClient\Model\ApiResponse deleteNoteCategory($note_category_id)

Delete a note-category

Delete a note-category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotecategoryApi();
$note_category_id = 789; // int | ID of the note-category to delete

try {
    $result = $api_instance->deleteNoteCategory($note_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotecategoryApi->deleteNoteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_category_id** | **int**| ID of the note-category to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListNoteCategory**
> \BumbalClient\Model\NoteCategoryListResponse retrieveListNoteCategory($arguments)

Retrieve List of NoteCategories

Retrieve List of NoteCategories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotecategoryApi();
$arguments = new \BumbalClient\Model\NoteCategoryRetrieveListArguments(); // \BumbalClient\Model\NoteCategoryRetrieveListArguments | NoteCategory RetrieveList Arguments

try {
    $result = $api_instance->retrieveListNoteCategory($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotecategoryApi->retrieveListNoteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\NoteCategoryRetrieveListArguments**](../Model/NoteCategoryRetrieveListArguments.md)| NoteCategory RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\NoteCategoryListResponse**](../Model/NoteCategoryListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNoteCategory**
> \BumbalClient\Model\NoteCategoryModel retrieveNoteCategory($note_category_id)

Find note-category by ID

Returns a single note-category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotecategoryApi();
$note_category_id = 789; // int | ID of note-category to return

try {
    $result = $api_instance->retrieveNoteCategory($note_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotecategoryApi->retrieveNoteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_category_id** | **int**| ID of note-category to return |

### Return type

[**\BumbalClient\Model\NoteCategoryModel**](../Model/NoteCategoryModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setNoteCategory**
> \BumbalClient\Model\ApiResponse setNoteCategory($body)

Set (create or update) an NoteCategory

Set (create or update) a NoteCategory. If id is set in the data, and a corresponding note-category is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotecategoryApi();
$body = new \BumbalClient\Model\NoteCategoryModel(); // \BumbalClient\Model\NoteCategoryModel | NoteCategory model

try {
    $result = $api_instance->setNoteCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotecategoryApi->setNoteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\NoteCategoryModel**](../Model/NoteCategoryModel.md)| NoteCategory model | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

