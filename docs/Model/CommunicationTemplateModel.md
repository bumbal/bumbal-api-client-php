# CommunicationTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional] 
**name** | **string** | Name of this Template | [optional] 
**description** | **string** | Description of this template | [optional] 
**subject** | **string** | Subject used in email | [optional] 
**content_html** | **string** | Mustache based HTML content template | [optional] 
**content_text** | **string** | Mustache based Text content template | [optional] 
**include_attachments** | **bool** | Include the files associated with this activity as attachment, mail only | [optional] [default to false]
**mappings** | [**\BumbalClient\Model\CommunicationMappingModel[]**](CommunicationMappingModel.md) |  | [optional] 
**active** | **bool** | if active&#x3D;0: Driver Unavailability has been removed and is no longer visible in any bumbal interface | [optional] 
**removed** | **bool** | Whether user is removed or not | [optional] 
**created_by** | **int** | created_by user id | [optional] 
**updated_by** | **int** | updated_by user id | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


