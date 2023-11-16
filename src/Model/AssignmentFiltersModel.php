<?php
/**
 * AssignmentFiltersModel
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
 * AssignmentFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssignmentFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssignmentFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int[]',
        'nr' => 'string[]',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'date_time_from_since' => '\DateTime',
        'date_time_from_till' => '\DateTime',
        'date_time_to_since' => '\DateTime',
        'date_time_to_till' => '\DateTime',
        'links' => 'object[]',
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'nr' => null,
        'date_time_from' => 'date-time',
        'date_time_to' => 'date-time',
        'date_time_from_since' => 'date-time',
        'date_time_from_till' => 'date-time',
        'date_time_to_since' => 'date-time',
        'date_time_to_till' => 'date-time',
        'links' => null,
        'updated_at_since' => 'date-time',
        'updated_at_till' => 'date-time'
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
        'id' => 'id',
        'nr' => 'nr',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'date_time_from_since' => 'date_time_from_since',
        'date_time_from_till' => 'date_time_from_till',
        'date_time_to_since' => 'date_time_to_since',
        'date_time_to_till' => 'date_time_to_till',
        'links' => 'links',
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nr' => 'setNr',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'date_time_from_since' => 'setDateTimeFromSince',
        'date_time_from_till' => 'setDateTimeFromTill',
        'date_time_to_since' => 'setDateTimeToSince',
        'date_time_to_till' => 'setDateTimeToTill',
        'links' => 'setLinks',
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nr' => 'getNr',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'date_time_from_since' => 'getDateTimeFromSince',
        'date_time_from_till' => 'getDateTimeFromTill',
        'date_time_to_since' => 'getDateTimeToSince',
        'date_time_to_till' => 'getDateTimeToTill',
        'links' => 'getLinks',
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['date_time_from_since'] = isset($data['date_time_from_since']) ? $data['date_time_from_since'] : null;
        $this->container['date_time_from_till'] = isset($data['date_time_from_till']) ? $data['date_time_from_till'] : null;
        $this->container['date_time_to_since'] = isset($data['date_time_to_since']) ? $data['date_time_to_since'] : null;
        $this->container['date_time_to_till'] = isset($data['date_time_to_till']) ? $data['date_time_to_till'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
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
     * Gets id
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nr
     * @return string[]
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     * @param string[] $nr Number of this assignment
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets date_time_from
     * @return \DateTime|string|null
     */
    public function getDateTimeFrom()
    {
        return $this->container['date_time_from'];
    }

    /**
     * Sets date_time_from
     * @param \DateTime|string|null $date_time_from DateTime From
     * @return $this
     */
    public function setDateTimeFrom($date_time_from)
    {
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_time_to
     * @return \DateTime|string|null
     */
    public function getDateTimeTo()
    {
        return $this->container['date_time_to'];
    }

    /**
     * Sets date_time_to
     * @param \DateTime|string|null $date_time_to DateTime To
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets date_time_from_since
     * @return \DateTime|string|null
     */
    public function getDateTimeFromSince()
    {
        return $this->container['date_time_from_since'];
    }

    /**
     * Sets date_time_from_since
     * @param \DateTime|string|null $date_time_from_since filter assignments with a DateTime From since this input
     * @return $this
     */
    public function setDateTimeFromSince($date_time_from_since)
    {
        $this->container['date_time_from_since'] = $date_time_from_since;

        return $this;
    }

    /**
     * Gets date_time_from_till
     * @return \DateTime|string|null
     */
    public function getDateTimeFromTill()
    {
        return $this->container['date_time_from_till'];
    }

    /**
     * Sets date_time_from_till
     * @param \DateTime|string|null $date_time_from_till filter assignments with a DateTime From till this input
     * @return $this
     */
    public function setDateTimeFromTill($date_time_from_till)
    {
        $this->container['date_time_from_till'] = $date_time_from_till;

        return $this;
    }

    /**
     * Gets date_time_to_since
     * @return \DateTime|string|null
     */
    public function getDateTimeToSince()
    {
        return $this->container['date_time_to_since'];
    }

    /**
     * Sets date_time_to_since
     * @param \DateTime|string|null $date_time_to_since filter assignments with a DateTime To since this input
     * @return $this
     */
    public function setDateTimeToSince($date_time_to_since)
    {
        $this->container['date_time_to_since'] = $date_time_to_since;

        return $this;
    }

    /**
     * Gets date_time_to_till
     * @return \DateTime|string|null
     */
    public function getDateTimeToTill()
    {
        return $this->container['date_time_to_till'];
    }

    /**
     * Sets date_time_to_till
     * @param \DateTime|string|null $date_time_to_till filter assignments with a DateTime To till this input
     * @return $this
     */
    public function setDateTimeToTill($date_time_to_till)
    {
        $this->container['date_time_to_till'] = $date_time_to_till;

        return $this;
    }

    /**
     * Gets links
     * @return object[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param object[] $links Activity Link ids
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets updated_at_since
     * @return \DateTime|string|null
     */
    public function getUpdatedAtSince()
    {
        return $this->container['updated_at_since'];
    }

    /**
     * Sets updated_at_since
     * @param \DateTime|string|null $updated_at_since Show updated since
     * @return $this
     */
    public function setUpdatedAtSince($updated_at_since)
    {
        $this->container['updated_at_since'] = $updated_at_since;

        return $this;
    }

    /**
     * Gets updated_at_till
     * @return \DateTime|string|null
     */
    public function getUpdatedAtTill()
    {
        return $this->container['updated_at_till'];
    }

    /**
     * Sets updated_at_till
     * @param \DateTime|string|null $updated_at_till Show updated till
     * @return $this
     */
    public function setUpdatedAtTill($updated_at_till)
    {
        $this->container['updated_at_till'] = $updated_at_till;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    #[\ReturnTypeWillChange]
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


