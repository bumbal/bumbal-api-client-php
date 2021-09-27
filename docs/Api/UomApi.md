# BumbalClient\UomApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListUom**](UomApi.md#retrieveListUom) | **PUT** /uom | Retrieve List of Uom&#39;s


# **retrieveListUom**
> \BumbalClient\Model\UomListResponse retrieveListUom($arguments)

Retrieve List of Uom's

Retrieve List of Uom's

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UomApi();
$arguments = new \BumbalClient\Model\UomRetrieveListArguments(); // \BumbalClient\Model\UomRetrieveListArguments | Uom RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUom($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UomApi->retrieveListUom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UomRetrieveListArguments**](../Model/UomRetrieveListArguments.md)| Uom RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UomListResponse**](../Model/UomListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

