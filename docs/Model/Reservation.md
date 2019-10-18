# # Reservation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | [**\HapiPush\Model\PropertyId**](PropertyId.md) |  | [optional] 
**id** | **string** | PMS reservation identifier | [optional] 
**booking_confirmation_id** | **string** | CRS or external system reservation identifier | [optional] 
**arrival_date** | **string** | check-in date, in YYYY-MM-DD format | [optional] 
**arrival_time** | **string** | estimated check-in time in hh:mm:ss format | [optional] 
**departure_date** | **string** | check-out date, in YYYY-MM-DD format | [optional] 
**creator** | **string** | user or interface who created the reservation | [optional] 
**cancel_reason** | **string** | cancel reason code | [optional] 
**created_date** | **string** | read-only reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancelled_date** | **string** | Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancellation_number** | **string** | cancellation number for reservation. may be supplied externally or returned from pms | [optional] 
**cancellation_comment** | **string** | free-text cancellation reason | [optional] 
**adults** | **int** | count of adults associated to reservation | [optional] 
**children** | **int** | count of children associated to reservation | [optional] 
**status** | **string** | current status of reservation | [optional] 
**guests** | [**\HapiPush\Model\Guest[]**](Guest.md) | primary and accompanying guest information associated to reservation | [optional] 
**profiles** | [**\HapiPush\Model\Profile[]**](Profile.md) | non-guest profiles associated to reservation (e.g. TRAVEL_AGENT, BUSINESS) | [optional] 
**room_stays** | [**\HapiPush\Model\RoomStay[]**](RoomStay.md) | room stay information associated to reservation | [optional] 
**comments** | [**\HapiPush\Model\Comment[]**](Comment.md) | comments associated to reservation | [optional] 
**requests** | [**\HapiPush\Model\SpecialRequest[]**](SpecialRequest.md) | guest requests associated to reservation | [optional] 
**notifications** | [**\HapiPush\Model\ReservationNotification[]**](ReservationNotification.md) | reservation notifications triggered on event | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


