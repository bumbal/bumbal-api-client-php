# BumbalClient\MigrationApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**initiateWebSocketConnection**](MigrationApi.md#initiateWebSocketConnection) | **POST** /migration/initiate | Initiate a webSocket connection for a service


# **initiateWebSocketConnection**
> \BumbalClient\Model\ApiResponse initiateWebSocketConnection($body)

Initiate a webSocket connection for a service

Initiate a webSocket connection for a service

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

$api_instance = new BumbalClient\Api\MigrationApi();
$body = new \BumbalClient\Model\WebSocketContainerModel(); // \BumbalClient\Model\WebSocketContainerModel | Service to initiate the webSocket connection for

try {
    $result = $api_instance->initiateWebSocketConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->initiateWebSocketConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\WebSocketContainerModel**](../Model/WebSocketContainerModel.md)| Service to initiate the webSocket connection for |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

