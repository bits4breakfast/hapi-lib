# AllotmentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resort_allotment_id** | **string** |  | [optional] 
**hotel** | [**\Hapi\Model\HotelDto**](HotelDto.md) |  | [optional] 
**block_status** | **string** | Block status | [optional] 
**block_name** | **string** | Block name | [optional] 
**block_code** | **string** | Block code | [optional] 
**effective_date** | **string** | Start date of allotment in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**expire_date** | **string** | End date of allotment in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**rate_plan_code** | **string** | Rate plan code | [optional] 
**market** | [**\Hapi\Model\MarketDto**](MarketDto.md) |  | [optional] 
**source_code** | **string** | Source code | [optional] 
**channel_code** | **string** | Channel code | [optional] 
**inventory_blocks** | [**\Hapi\Model\InventoryBlockDto[]**](InventoryBlockDto.md) | Set of inventory blocks. | [optional] 
**notes** | [**\Hapi\Model\CommentDto[]**](CommentDto.md) | Set of allotment notes | [optional] 
**catering_block** | **string** | Is this a sales/catering block | [optional] 
**booking_status** | **string** | Block booking status | [optional] 
**profiles** | [**\Hapi\Model\ProfileReferenceDto[]**](ProfileReferenceDto.md) | Set of related profile references | [optional] 
**owner** | **string** | Block owner | [optional] 
**packages** | **string[]** | Block package codes | [optional] 
**block_type** | **string** | Block type | [optional] 
**reservation_type** | **string** | Block reservation type | [optional] 
**booking_method** | **string** | Method in which the block was booked | [optional] 
**repository_record_created** | [**\DateTime**](\DateTime.md) | Record create date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_record_updated** | [**\DateTime**](\DateTime.md) | Record update date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

