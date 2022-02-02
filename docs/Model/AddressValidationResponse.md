# AddressValidationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **bool** | Indicates if a location was found for the address and the minimum_certainty requirement was met. | [optional] 
**certainty** | **int** | Certainty that latitude/longitude fields in address are accurate expressed as an integer between 0 and 100. When the valid field is false, certainty will always be set to 0 | [optional] 
**address** | [**\BumbalClient\Model\AddressModel**](AddressModel.md) | Address model containing the latitude and longitude fields | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


