# QuestionnaireAnswerModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**active** | **bool** | if active&#x3D;0: QuestionnaireAnswer has been removed and is no longer visible in any bumbal interface | [optional] 
**questionnaire_id** | **int** | Questionnaire ID | [optional] 
**questionnaire_question_id** | **int** | Questionnaire Question ID | [optional] 
**order** | **int** | Order | [optional] 
**question** | **string** | Textual representation of the question | [optional] 
**answer** | **string** | Textual representation of the answer | [optional] 
**chosen_options** | **int[]** | Chosen options id&#39;s | [optional] 
**answer_options** | [**\BumbalClient\Model\QuestionnaireQuestionOptionModel[]**](QuestionnaireQuestionOptionModel.md) |  | [optional] 
**questionnaire_question_type_name** | **string** | Question type name | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


