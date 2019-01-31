# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\Hapi\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | reservation identifier and object key | [optional] 
**booking_confirmation_id** | **string** | unique confirmation id within given hotel | [optional] 
**arrival_date** | **string** | check-in date, in YYYY-MM-DD format | [optional] 
**arrival_time** | **string** | estimated check-in time | [optional] 
**departure_date** | **string** | check-out date, in YYYY-MM-DD format | [optional] 
**creator** | **string** | user or interface who created the reservation | [optional] 
**created_date** | **string** | read-only reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancelled_date** | **string** | Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancellation_number** | **string** | cancellation number for reservation. may be supplied externally or returned from pms | [optional] 
**adults** | **int** |  | [optional] 
**children** | **int** |  | [optional] 
**status** | **string** | current status of reservation | [optional] 
**guests** | [**\Hapi\Model\Guest[]**](Guest.md) | guest profiles associated to reservation | [optional] 
**profiles** | [**\Hapi\Model\Profile[]**](Profile.md) | non-guest profiles associated to reservation | [optional] 
**room_stays** | [**\Hapi\Model\RoomStay[]**](RoomStay.md) | room stay information associated to reservation | [optional] 
**comments** | [**\Hapi\Model\Comment[]**](Comment.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

