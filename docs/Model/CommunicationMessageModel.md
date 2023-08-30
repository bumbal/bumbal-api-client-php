# CommunicationMessageModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional] 
**activity_id** | **int** | Activity ID | [optional] 
**message_type** | **string** | Type of message | [optional] 
**message_type_name** | **string** | Message type name | [optional] 
**scheduled_at** | **string** | When the message is scheduled | [optional] 
**executed_at** | **string** | When the message is executed | [optional] 
**status_id** | **int** | The status of the message (0 &#x3D; new, 10 &#x3D; scheduled, 20 &#x3D; processing, 30 &#x3D; executed) | [optional] 
**communication_mapping_id** | **int** | The mapping used for this message | [optional] 
**communication_mapping** | [**\BumbalClient\Model\CommunicationTemplateModel**](CommunicationTemplateModel.md) |  | [optional] 
**communication_message_history** | [**\BumbalClient\Model\CommunicationMessageHistoryModel[]**](CommunicationMessageHistoryModel.md) | All the history events for a message (sorted chronologically) | [optional] 
**communication_message_content** | [**\BumbalClient\Model\CommunicationMessageContentModel**](CommunicationMessageContentModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**created_by** | **int** | created_by user id | [optional] 
**updated_by** | **int** | updated_by user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


