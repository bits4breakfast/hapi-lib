<?php
/**
 * RateDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  HapiPush
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* HAPI Data Model
 *
* HAPI External Data Model
 *
* OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HapiPush\Model;

use \ArrayAccess;
use \HapiPush\ObjectSerializer;

/**
 * RateDetail Class Doc Comment
 *
 * @category Class
 * @package  HapiPush
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RateDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dates' => '\HapiPush\Model\TimeSpan',
'rate_code' => 'string',
'market_code' => 'string',
'source_code' => 'string',
'packages' => 'string',
'room_types' => 'string[]',
'days_of_week' => 'string[]',
'rates' => '\HapiPush\Model\Rate[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dates' => null,
'rate_code' => null,
'market_code' => null,
'source_code' => null,
'packages' => null,
'room_types' => null,
'days_of_week' => null,
'rates' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dates' => 'dates',
'rate_code' => 'rateCode',
'market_code' => 'marketCode',
'source_code' => 'sourceCode',
'packages' => 'packages',
'room_types' => 'roomTypes',
'days_of_week' => 'daysOfWeek',
'rates' => 'rates'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dates' => 'setDates',
'rate_code' => 'setRateCode',
'market_code' => 'setMarketCode',
'source_code' => 'setSourceCode',
'packages' => 'setPackages',
'room_types' => 'setRoomTypes',
'days_of_week' => 'setDaysOfWeek',
'rates' => 'setRates'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dates' => 'getDates',
'rate_code' => 'getRateCode',
'market_code' => 'getMarketCode',
'source_code' => 'getSourceCode',
'packages' => 'getPackages',
'room_types' => 'getRoomTypes',
'days_of_week' => 'getDaysOfWeek',
'rates' => 'getRates'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['rate_code'] = isset($data['rate_code']) ? $data['rate_code'] : null;
        $this->container['market_code'] = isset($data['market_code']) ? $data['market_code'] : null;
        $this->container['source_code'] = isset($data['source_code']) ? $data['source_code'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['room_types'] = isset($data['room_types']) ? $data['room_types'] : null;
        $this->container['days_of_week'] = isset($data['days_of_week']) ? $data['days_of_week'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets dates
     *
     * @return \HapiPush\Model\TimeSpan
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \HapiPush\Model\TimeSpan $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets rate_code
     *
     * @return string
     */
    public function getRateCode()
    {
        return $this->container['rate_code'];
    }

    /**
     * Sets rate_code
     *
     * @param string $rate_code detail rate code
     *
     * @return $this
     */
    public function setRateCode($rate_code)
    {
        $this->container['rate_code'] = $rate_code;

        return $this;
    }

    /**
     * Gets market_code
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->container['market_code'];
    }

    /**
     * Sets market_code
     *
     * @param string $market_code rate marketing code
     *
     * @return $this
     */
    public function setMarketCode($market_code)
    {
        $this->container['market_code'] = $market_code;

        return $this;
    }

    /**
     * Gets source_code
     *
     * @return string
     */
    public function getSourceCode()
    {
        return $this->container['source_code'];
    }

    /**
     * Sets source_code
     *
     * @param string $source_code rate source code
     *
     * @return $this
     */
    public function setSourceCode($source_code)
    {
        $this->container['source_code'] = $source_code;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return string
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param string $packages packages included in rate
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets room_types
     *
     * @return string[]
     */
    public function getRoomTypes()
    {
        return $this->container['room_types'];
    }

    /**
     * Sets room_types
     *
     * @param string[] $room_types valid room types for rate
     *
     * @return $this
     */
    public function setRoomTypes($room_types)
    {
        $this->container['room_types'] = $room_types;

        return $this;
    }

    /**
     * Gets days_of_week
     *
     * @return string[]
     */
    public function getDaysOfWeek()
    {
        return $this->container['days_of_week'];
    }

    /**
     * Sets days_of_week
     *
     * @param string[] $days_of_week Days of the week for which the rate is valid
     *
     * @return $this
     */
    public function setDaysOfWeek($days_of_week)
    {
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \HapiPush\Model\Rate[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \HapiPush\Model\Rate[] $rates Rate amounts by number of guests and guest type
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
