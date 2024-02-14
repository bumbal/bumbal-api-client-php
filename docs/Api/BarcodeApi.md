# BumbalClient\BarcodeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateBarcode**](BarcodeApi.md#generateBarcode) | **POST** /barcode/generate | Create an unique barcode
[**retrieveBarcodeLabel**](BarcodeApi.md#retrieveBarcodeLabel) | **GET** /barcode/label/{packageLineId} | Retrieve a package-line barcode label


# **generateBarcode**
> \BumbalClient\Model\BarcodeGenerateResponse generateBarcode()

Create an unique barcode

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

$api_instance = new BumbalClient\Api\BarcodeApi();

try {
    $result = $api_instance->generateBarcode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->generateBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\BarcodeGenerateResponse**](../Model/BarcodeGenerateResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveBarcodeLabel**
> \BumbalClient\Model\BarcodeLabelResponse retrieveBarcodeLabel($package_line_id, $width, $width2)

Retrieve a package-line barcode label

Retrieve a package-line barcode label

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

$api_instance = new BumbalClient\Api\BarcodeApi();
$package_line_id = 789; // int | ID of the package-line to retrieve the barcode label for
$width = 100; // int | The width of the label in mm
$width2 = 50; // int | The height of the label in mm

try {
    $result = $api_instance->retrieveBarcodeLabel($package_line_id, $width, $width2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->retrieveBarcodeLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_line_id** | **int**| ID of the package-line to retrieve the barcode label for |
 **width** | **int**| The width of the label in mm | [optional] [default to 100]
 **width2** | **int**| The height of the label in mm | [optional] [default to 50]

### Return type

[**\BumbalClient\Model\BarcodeLabelResponse**](../Model/BarcodeLabelResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

