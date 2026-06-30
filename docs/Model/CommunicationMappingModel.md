# CommunicationMappingModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional] 
**template_id** | **int** | Template ID | [optional] 
**template** | [**\BumbalClient\Model\CommunicationTemplateModel**](CommunicationTemplateModel.md) |  | [optional] 
**delivery_method_id** | **int** | Delivery Method ID | [optional] 
**delivery_method_name** | **string** | Delivery Method Name | [optional] 
**message_type_id** | **int** | Message type ID | [optional] 
**message_type_name** | **string** | Message type name | [optional] 
**no_tags** | **bool** | No tag flag | [optional] 
**no_zones** | **bool** | No zone flag | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**tag_ids** | **int[]** | Tag IDs | [optional] 
**tags** | **object[]** | Tag names | [optional] 
**zones** | **object[]** | Zones | [optional] 
**zone_names** | **string[]** | Zone names | [optional] 
**zone_ids** | **int[]** | Zone IDs | [optional] 
**communication_label_ids** | **int[]** | Communication label IDs | [optional] 
**communication_label_names** | **string[]** | Communication label names | [optional] 
**communication_labels** | **object[]** | CommunicationLabels | [optional] 
**usage_count** | **int** | Number of times this mapping triggered template usage | [optional] 
**last_used_at** | [**\DateTime**](\DateTime.md) | Last time this mapping triggered template usage | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**created_by** | **int** | created_by user id | [optional] 
**updated_by** | **int** | updated_by user id | [optional] 
**active** | **bool** | Mapping is active (&#x3D;true). | [optional] 
**removed** | **bool** | Mapping is removed (&#x3D;true). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


