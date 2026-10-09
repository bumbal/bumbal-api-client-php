# ActivityCapacityStatistic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**activity_id** | **int** |  | [optional] 
**route_id** | **int** |  | [optional] 
**capacity_type_id** | **int** |  | [optional] 
**sequence_nr** | **int** | Activity sequence number within route (for graph ordering) | [optional] 
**load_value** | **float** | Total load added by this activity | [optional] 
**unload_value** | **float** | Total unload removed by this activity | [optional] 
**net_value** | **float** | load_value minus unload_value | [optional] 
**start_capacity** | **float** | Running load at start of this activity (before applying net_value) | [optional] 
**current_route_load_after_activity** | **float** | Running route load after this activity. Use as graph data point. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


