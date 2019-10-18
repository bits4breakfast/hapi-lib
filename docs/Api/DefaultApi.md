# HapiPush\DefaultApi

All URIs are relative to *https://vendor-domain.io/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allotmentPost**](DefaultApi.md#allotmentPost) | **POST** /allotment | 
[**inventoryPost**](DefaultApi.md#inventoryPost) | **POST** /inventory | 
[**loginPost**](DefaultApi.md#loginPost) | **POST** /login | 
[**profilesPost**](DefaultApi.md#profilesPost) | **POST** /profiles | 
[**ratePost**](DefaultApi.md#ratePost) | **POST** /rate | 
[**reservationsPost**](DefaultApi.md#reservationsPost) | **POST** /reservations | 
[**stayPost**](DefaultApi.md#stayPost) | **POST** /stay | 



## allotmentPost

> allotmentPost($allotment)



- endpoint to receive allotment messages from hapi streaming flow client - secured with bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = HapiPush\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allotment = new \HapiPush\Model\Allotment(); // \HapiPush\Model\Allotment | 

try {
    $apiInstance->allotmentPost($allotment);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->allotmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allotment** | [**\HapiPush\Model\Allotment**](../Model/Allotment.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## inventoryPost

> inventoryPost($inventory)



- endpoint to receive inventory availability from hapi streaming flow client - secured with bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = HapiPush\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory = new \HapiPush\Model\Inventory(); // \HapiPush\Model\Inventory | 

try {
    $apiInstance->inventoryPost($inventory);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->inventoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory** | [**\HapiPush\Model\Inventory**](../Model/Inventory.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loginPost

> \HapiPush\Model\AuthResponse loginPost($auth_request)



auth endpoint - returns jwt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_request = {
    "api_id":"hapi",
    "api_key":"XCR4sLqCYXrjFCVSfHSenPW3t5FmJznr"
}; // \HapiPush\Model\AuthRequest | 

try {
    $result = $apiInstance->loginPost($auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_request** | [**\HapiPush\Model\AuthRequest**](../Model/AuthRequest.md)|  |

### Return type

[**\HapiPush\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## profilesPost

> profilesPost($profile)



- endpoint to receive profile messages from hapi streaming flow client - secured with bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = HapiPush\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile = new \HapiPush\Model\Profile(); // \HapiPush\Model\Profile | 

try {
    $apiInstance->profilesPost($profile);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->profilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | [**\HapiPush\Model\Profile**](../Model/Profile.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ratePost

> ratePost($rate)



- endpoint to receive rates from hapi streaming flow client - secured with bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = HapiPush\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate = new \HapiPush\Model\Rate(); // \HapiPush\Model\Rate | 

try {
    $apiInstance->ratePost($rate);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate** | [**\HapiPush\Model\Rate**](../Model/Rate.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reservationsPost

> reservationsPost($reservation)



- endpoint to receive reservation messages from hapi streaming flow client - secured with bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = HapiPush\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation = new \HapiPush\Model\Reservation(); // \HapiPush\Model\Reservation | 

try {
    $apiInstance->reservationsPost($reservation);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reservationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation** | [**\HapiPush\Model\Reservation**](../Model/Reservation.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## stayPost

> stayPost($stay)



- endpoint to receive stay messages from hapi streaming flow client - secured with bearer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = HapiPush\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HapiPush\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stay = new \HapiPush\Model\Stay(); // \HapiPush\Model\Stay | 

try {
    $apiInstance->stayPost($stay);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->stayPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stay** | [**\HapiPush\Model\Stay**](../Model/Stay.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

