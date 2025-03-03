# QuestionnaireModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**active** | **bool** | if active&#x3D;0: Questionnaire has been removed and is no longer visible in any bumbal interface | [optional] 
**questionnaire_template_id** | **int** | ID of the parent questionnaire template, just for reference | [optional] 
**name** | **string** | Questionnaire name | [optional] 
**questionnaire_type_id** | **int** | ID of the questionnaire type, just for reference | [optional] 
**questionnaire_type_name** | **string** | name of the questionnaire type | [optional] 
**lang_code** | **string** | ISO lang code | [optional] 
**answers** | [**\BumbalClient\Model\QuestionnaireAnswerModel[]**](QuestionnaireAnswerModel.md) |  | [optional] 
**object_type** | **object** | Object type IDs available for this questionnaire | [optional] 
**object_type_name** | **string** | Object type name for the bound object to this questionnaire | [optional] 
**object_id** | **int** | Object ID | [optional] 
**required** | **bool** | whetrher the questionnaoire is required to be filled in | [optional] 
**dynamic** | **bool** | whetrher the questionnaoire is dynamic (non-liniar flow for the questions, where the answer to one question could impact the choice of the follow-up question. | [optional] 
**finished** | **bool** | whetrher the questionnaoire is already filled in completely | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


