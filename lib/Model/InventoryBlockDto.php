<?php
/**
 * InventoryBlockDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* HAPI data model
 *
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hapi\Model;

use \ArrayAccess;
use \Hapi\ObjectSerializer;

/**
 * InventoryBlockDto Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryBlockDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryBlockDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'room_type' => 'string',
'inventory_date' => '\DateTime',
'number_to_block' => 'int',
'rates' => '\Hapi\Model\RateAmountDto[]',
'cutoff_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'room_type' => null,
'inventory_date' => 'date',
'number_to_block' => null,
'rates' => null,
'cutoff_date' => 'date'    ];

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
        'room_type' => 'roomType',
'inventory_date' => 'inventoryDate',
'number_to_block' => 'numberToBlock',
'rates' => 'rates',
'cutoff_date' => 'cutoffDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'room_type' => 'setRoomType',
'inventory_date' => 'setInventoryDate',
'number_to_block' => 'setNumberToBlock',
'rates' => 'setRates',
'cutoff_date' => 'setCutoffDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'room_type' => 'getRoomType',
'inventory_date' => 'getInventoryDate',
'number_to_block' => 'getNumberToBlock',
'rates' => 'getRates',
'cutoff_date' => 'getCutoffDate'    ];

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
        $this->container['room_type'] = isset($data['room_type']) ? $data['room_type'] : null;
        $this->container['inventory_date'] = isset($data['inventory_date']) ? $data['inventory_date'] : null;
        $this->container['number_to_block'] = isset($data['number_to_block']) ? $data['number_to_block'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
        $this->container['cutoff_date'] = isset($data['cutoff_date']) ? $data['cutoff_date'] : null;
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
     * Gets room_type
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->container['room_type'];
    }

    /**
     * Sets room_type
     *
     * @param string $room_type Room type
     *
     * @return $this
     */
    public function setRoomType($room_type)
    {
        $this->container['room_type'] = $room_type;

        return $this;
    }

    /**
     * Gets inventory_date
     *
     * @return \DateTime
     */
    public function getInventoryDate()
    {
        return $this->container['inventory_date'];
    }

    /**
     * Sets inventory_date
     *
     * @param \DateTime $inventory_date Date of inventory in repository, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setInventoryDate($inventory_date)
    {
        $this->container['inventory_date'] = $inventory_date;

        return $this;
    }

    /**
     * Gets number_to_block
     *
     * @return int
     */
    public function getNumberToBlock()
    {
        return $this->container['number_to_block'];
    }

    /**
     * Sets number_to_block
     *
     * @param int $number_to_block Number of rooms for this block per day per room type
     *
     * @return $this
     */
    public function setNumberToBlock($number_to_block)
    {
        $this->container['number_to_block'] = $number_to_block;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \Hapi\Model\RateAmountDto[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \Hapi\Model\RateAmountDto[] $rates Rate amount per number of occupying persons in block detail
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets cutoff_date
     *
     * @return \DateTime
     */
    public function getCutoffDate()
    {
        return $this->container['cutoff_date'];
    }

    /**
     * Sets cutoff_date
     *
     * @param \DateTime $cutoff_date Date at which block gets released back into inventory, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setCutoffDate($cutoff_date)
    {
        $this->container['cutoff_date'] = $cutoff_date;

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