# InventoryBlockDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_type** | **string** | Room type | [optional] 
**inventory_date** | [**\DateTime**](\DateTime.md) | Date of inventory in repository, in YYYY-MM-DD format | [optional] 
**number_to_block** | **int** | Number of rooms for this block per day per room type | [optional] 
**rates** | [**\Hapi\Model\RateAmountDto[]**](RateAmountDto.md) | Rate amount per number of occupying persons in block detail | [optional] 
**cutoff_date** | [**\DateTime**](\DateTime.md) | Date at which block gets released back into inventory, in YYYY-MM-DD format | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

