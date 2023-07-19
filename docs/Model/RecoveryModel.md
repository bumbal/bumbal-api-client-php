# RecoveryModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**activity_ids** | **int[]** | Unique Identifier for activities where this recovery is related to | [optional] 
**nr** | **string** | Number of this Recovery | [optional] 
**nr_of_packages** | **float** | Number of packages in package line | [optional] 
**package_type_name** | **string** | Type of the Packages in the package line | [optional] 
**package_type_id** | **int** | ID of the package type for the packages in this Recovery | [optional] 
**barcode** | **string** | Barcode of this recovery | [optional] 
**barcodes** | **string[]** | For every barcode in this array, a separate recovery will be created | [optional] 
**action_type_id** | **string** | Action type name, 1:inbound, 2:outbound, 3:assess | [optional] 
**action_type_name** | **string** | Action type name | [optional] 
**check_type_id** | **string** | Check type name, 1:manual, 2:scan | [optional] 
**check_type_name** | **string** | Check type name | [optional] 
**checked_by_driver** | **bool** | boolean for whether or not the packages have been checked by the driver | [optional] 
**description** | **string** | description of this package_line | [optional] 
**active** | **bool** | if active&#x3D;0: package line has been removed and is no longer visible in any bumbal interface | [optional] 
**applied_capacities** | **object** |  | [optional] 
**capacities** | [**\BumbalClient\Model\CapacityModel[]**](CapacityModel.md) |  | [optional] 
**activity_links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) | links to activities connected to this package_line | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**notes** | [**\BumbalClient\Model\NoteModel[]**](NoteModel.md) |  | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


