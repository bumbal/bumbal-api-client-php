# DuplicateStatusResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | The job token. | [optional] 
**state** | **string** | Current state of the duplication job. | [optional] 
**total** | **int** | Total number of records requested for duplication. | [optional] 
**completed** | **int** | Number of records that have been processed (succeeded + failed). | [optional] 
**succeeded** | [**\BumbalClient\Model\DuplicateStatusResponseDataSucceeded[]**](DuplicateStatusResponseDataSucceeded.md) | Successfully duplicated records. Each entry contains original_id and new_id. | [optional] 
**failed** | [**\BumbalClient\Model\DuplicateStatusResponseDataFailed[]**](DuplicateStatusResponseDataFailed.md) | Records that could not be duplicated. Each entry contains id and reason. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


