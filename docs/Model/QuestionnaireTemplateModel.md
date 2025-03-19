# QuestionnaireTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**active** | **bool** | if active&#x3D;0: QuestionnaireTemplate has been removed and is no longer visible in any bumbal interface | [optional] 
**brands** | [**\BumbalClient\Model\BrandModel[]**](BrandModel.md) |  | [optional] 
**brand_ids** | **int[]** | Brand ids | [optional] 
**brand_names** | **string[]** | Brand names | [optional] 
**zones** | [**\BumbalClient\Model\ZoneModel[]**](ZoneModel.md) |  | [optional] 
**zone_ids** | **int[]** | Zone ids | [optional] 
**zone_names** | **string[]** | Zone names | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**tag_ids** | **int[]** | Tag ids | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**name** | **string** | Name of the questionnaire template | [optional] 
**questionnaire_type_id** | **int** | Questionnaire type id | [optional] 
**questionnaire_type_name** | **string** | Name of the questionnaire type | [optional] 
**no_tags** | **bool** | if no_tags&#x3D;1: no tags are used for matching | [optional] 
**no_zones** | **bool** | if no_zones&#x3D;1: no zones are used for matching | [optional] 
**questions** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionModel[]**](QuestionnaireTemplateQuestionModel.md) |  | [optional] 
**required** | **bool** | whetrher the questionnaoire is required to be filled in | [optional] 
**dynamic** | **bool** | whetrher the questionnaoire is dynamic (non-liniar flow for the questions, where the answer to one question could impact the choice of the follow-up question. | [optional] 
**activity_type_ids** | **int[]** | Activity type ids | [optional] 
**object_type** | **int** | Object type ID for the bound object to this questionnaire | [optional] 
**object_type_name** | **string** | Object type name for the bound object to this questionnaire | [optional] 
**created_by** | **string** | ID of the user who created the questionnaire template | [optional] 
**updated_by** | **string** | ID of the user who last updated the questionnaire template | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date and time when the questionnaire template was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date and time when the questionnaire template was last updated | [optional] 
**removed** | **bool** | Questionnaire template (&#x3D;true) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


