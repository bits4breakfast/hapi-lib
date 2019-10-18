# # InventoryBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_type** | **string** | Room type | [optional] 
**rate_code** | **string** | code identifying rate for block | [optional] 
**dates** | [**\HapiPush\Model\TimeSpan**](TimeSpan.md) |  | [optional] 
**cutoff_date** | **string** | used to determine when the inventory block is released back into house inventory | [optional] 
**number_to_block** | **int** | number of rooms for this block per day per room type | [optional] 
**number_sold** | **int** | number of rooms sold in block | [optional] 
**comp_rooms_number** | **int** | number of comp rooms available in block | [optional] 
**currency_code** | **string** | code identifying type of currency associated to rate | [optional] 
**rates** | [**\HapiPush\Model\BlockRate[]**](BlockRate.md) | rate and occupancy detail for room type in block | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


