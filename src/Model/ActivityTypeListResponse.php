<?php
/**
 * ActivityTypeListResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: info@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * ActivityTypeListResponse Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityTypeListResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityTypeListResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\BumbalClient\Model\ActivityTypeModel[]',
        'count_filtered' => 'int',
        'count_unfiltered' => 'int',
        'count_limited' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'items' => null,
        'count_filtered' => null,
        'count_unfiltered' => null,
        'count_limited' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'items' => 'items',
        'count_filtered' => 'count_filtered',
        'count_unfiltered' => 'count_unfiltered',
        'count_limited' => 'count_limited'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'count_filtered' => 'setCountFiltered',
        'count_unfiltered' => 'setCountUnfiltered',
        'count_limited' => 'setCountLimited'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'count_filtered' => 'getCountFiltered',
        'count_unfiltered' => 'getCountUnfiltered',
        'count_limited' => 'getCountLimited'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['count_filtered'] = isset($data['count_filtered']) ? $data['count_filtered'] : null;
        $this->container['count_unfiltered'] = isset($data['count_unfiltered']) ? $data['count_unfiltered'] : null;
        $this->container['count_limited'] = isset($data['count_limited']) ? $data['count_limited'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets items
     * @return \BumbalClient\Model\ActivityTypeModel[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \BumbalClient\Model\ActivityTypeModel[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets count_filtered
     * @return int
     */
    public function getCountFiltered()
    {
        return $this->container['count_filtered'];
    }

    /**
     * Sets count_filtered
     * @param int $count_filtered Count of total items with filters in place
     * @return $this
     */
    public function setCountFiltered($count_filtered)
    {
        $this->container['count_filtered'] = $count_filtered;

        return $this;
    }

    /**
     * Gets count_unfiltered
     * @return int
     */
    public function getCountUnfiltered()
    {
        return $this->container['count_unfiltered'];
    }

    /**
     * Sets count_unfiltered
     * @param int $count_unfiltered Count of total items without filters in place
     * @return $this
     */
    public function setCountUnfiltered($count_unfiltered)
    {
        $this->container['count_unfiltered'] = $count_unfiltered;

        return $this;
    }

    /**
     * Gets count_limited
     * @return int
     */
    public function getCountLimited()
    {
        return $this->container['count_limited'];
    }

    /**
     * Sets count_limited
     * @param int $count_limited Count of items with limit in place
     * @return $this
     */
    public function setCountLimited($count_limited)
    {
        $this->container['count_limited'] = $count_limited;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


