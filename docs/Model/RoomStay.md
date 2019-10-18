# # RoomStay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_number** | **string** | room number for stay | [optional] 
**status** | **string** | current status of reservation | [optional] 
**guest_id** | **string** | id of guest associated to stay | [optional] 
**room_type** | **string** | code identifying the type of room associated to stay | [optional] 
**rate_code** | **string** | code identifying rate for stay | [optional] 
**market_code** | **string** | code identifying marketing type for rate | [optional] 
**channel_code** | **string** | code identifying source of reservation | [optional] 
**source_code** | **string** | code identifying source of rate associated to stay | [optional] 
**block_code** | **string** | group block code | [optional] 
**room_count** | **int** | number of rooms associated to stay | [optional] 
**payment_method** | **string** | payment method used in the reservation | [optional] 
**comp_yn** | **string** | is reservation complimentary | [optional] 
**rates** | [**\HapiPush\Model\RoomRate[]**](RoomRate.md) | rate information for stay | [optional] 
**revenue** | [**\HapiPush\Model\Revenue[]**](Revenue.md) | revenue information for stay | [optional] 
**services** | [**\HapiPush\Model\Service[]**](Service.md) | services or fixed charges associated to stay | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


