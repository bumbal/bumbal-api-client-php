# QuestionnaireFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_type** | **int** | Object type IDs available for this questionnaire | [optional] 
**object_id** | **int** | Object id&#39;s available for this questionnaire | [optional] 
**object_type_name** | **string** | Object type name available for this questionnaire | [optional] 
**lang_code** | **string** | ISO lang code | [optional] 
**questionnaire_type_name** | **object** | Questionnaire type name | [optional] 
**required** | **bool[]** | whetrher the questionnaoire is required to be filled in | [optional] 
**dynamic** | **bool[]** | whetrher the questionnaoire is dynamic (non-liniar flow for the questions, where the answer to one question could impact the choice of the follow-up question. | [optional] 
**active** | **int[]** | Active status of Activity, 0 values represent deleted activities | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


