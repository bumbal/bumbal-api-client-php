# RouteCapacityStatistic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**route_id** | **int** |  | [optional] 
**capacity_type_id** | **int** |  | [optional] 
**route_capacity** | **float** |  | [optional] 
**route_capacity_own** | **float** |  | [optional] 
**route_capacity_vehicle** | **float** |  | [optional] 
**route_capacity_trailer** | **float** |  | [optional] 
**total_load** | **float** | Sum of all load values across route activities | [optional] 
**total_unload** | **float** | Sum of all unload values across route activities | [optional] 
**max_load** | **float** | Highest running load reached at any point in the route | [optional] 
**end_load** | **float** | Running load after the last activity | [optional] 
**start_capacity** | **float** | Initial load at route start (always 0 for a fresh route) | [optional] 
**available_capacity** | **float** | route_capacity minus max_load | [optional] 
**usage_percentage** | **float** | Capacity usage %. Peak mode: based on max_load. Total mode: based on total_load (may exceed 100 on depot reload routes). | [optional] 
**available_percentage** | **float** | 100 minus usage_percentage (clamped to 0 in peak mode) | [optional] 
**planning_room_score** | **float** | min(capacity available%, time available%). Lower &#x3D; more constrained. | [optional] 
**planning_room_status** | **string** |  | [optional] 
**limiting_factor** | **string** | Most constraining dimension | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


