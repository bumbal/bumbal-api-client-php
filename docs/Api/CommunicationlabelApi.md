# BumbalClient\CommunicationlabelApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCommunicationLabel**](CommunicationlabelApi.md#deleteCommunicationLabel) | **DELETE** /communication-label/{communicationLabelId} | Delete an communication label
[**retrieveCommunicationLabel**](CommunicationlabelApi.md#retrieveCommunicationLabel) | **GET** /communication-label/{communicationLabelId} | Find communication label by ID
[**retrieveListCommunicationLabel**](CommunicationlabelApi.md#retrieveListCommunicationLabel) | **PUT** /communication-label | Retrieve List of communication labels
[**setCommunicationLabel**](CommunicationlabelApi.md#setCommunicationLabel) | **POST** /communication-label/set | Set (create or update) an communication label


# **deleteCommunicationLabel**
> \BumbalClient\Model\ApiResponse deleteCommunicationLabel($communication_label_id)

Delete an communication label

Delete an communication label

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

$api_instance = new BumbalClient\Api\CommunicationlabelApi();
$communication_label_id = 789; // int | ID of the communication label to delete

try {
    $result = $api_instance->deleteCommunicationLabel($communication_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationlabelApi->deleteCommunicationLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_label_id** | **int**| ID of the communication label to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCommunicationLabel**
> \BumbalClient\Model\CommunicationLabelModel retrieveCommunicationLabel($communication_label_id)

Find communication label by ID

Returns a single communication label

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

$api_instance = new BumbalClient\Api\CommunicationlabelApi();
$communication_label_id = 789; // int | ID of communication label to return

try {
    $result = $api_instance->retrieveCommunicationLabel($communication_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationlabelApi->retrieveCommunicationLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_label_id** | **int**| ID of communication label to return |

### Return type

[**\BumbalClient\Model\CommunicationLabelModel**](../Model/CommunicationLabelModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationLabel**
> \BumbalClient\Model\CommunicationLabelListResponse retrieveListCommunicationLabel($arguments)

Retrieve List of communication labels

Retrieve List of communication labels

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

$api_instance = new BumbalClient\Api\CommunicationlabelApi();
$arguments = new \BumbalClient\Model\CommunicationLabelRetrieveListArguments(); // \BumbalClient\Model\CommunicationLabelRetrieveListArguments | CommunicationLabel RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCommunicationLabel($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationlabelApi->retrieveListCommunicationLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationLabelRetrieveListArguments**](../Model/CommunicationLabelRetrieveListArguments.md)| CommunicationLabel RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationLabelListResponse**](../Model/CommunicationLabelListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCommunicationLabel**
> \BumbalClient\Model\ApiResponse setCommunicationLabel($body)

Set (create or update) an communication label

Set (create or update) an communication label. If id or links are set in the data, and a corresponding communication label is found in Bumbal, an update will be performed.

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

$api_instance = new BumbalClient\Api\CommunicationlabelApi();
$body = new \BumbalClient\Model\CommunicationLabelModel(); // \BumbalClient\Model\CommunicationLabelModel | Communication label object

try {
    $result = $api_instance->setCommunicationLabel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationlabelApi->setCommunicationLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationLabelModel**](../Model/CommunicationLabelModel.md)| Communication label object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

