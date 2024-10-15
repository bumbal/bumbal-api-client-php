# ActivityRetrieveListArguments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**options** | [**\BumbalClient\Model\ActivityOptionsModel**](ActivityOptionsModel.md) |  | [optional] 
**filters** | [**\BumbalClient\Model\ActivityFiltersModel**](ActivityFiltersModel.md) |  | [optional] 
**limit** | **int** |  | [optional] 
**offset** | **int** |  | [optional] 
**sorting_column** | **string** | Sorting Column | [optional] 
**sorting_direction** | **string** | Sorting Direction | [optional] 
**search_text** | **string** |  | [optional] 
**search_exact** | **bool** | Only return exact matches to search_text (only used when advanced searching is enabled on environment) | [optional] 
**search_relevance** | **bool** | Override sorting by search_text matching score first, original sorting second. Note that if no sorting field is explicitly specified, text_search matching score will still be sorted on, even if search_relevance &#x3D; false. (only used when advanced searching is enabled on environment) | [optional] 
**as_list** | **bool** |  | [optional] 
**count_only** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


