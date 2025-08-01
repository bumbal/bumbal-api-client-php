<?php
/**
 * TimeSlotModel
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
 * Contact: support@bumbal.eu
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
 * TimeSlotModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TimeSlotModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TimeSlotModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'time_slot_type' => 'string',
        'time_slot_type_id' => 'int',
        'activity_id' => 'int',
        'date_from' => '\DateTime',
        'time_from' => 'string',
        'date_time_from' => '\DateTime',
        'date_to' => '\DateTime',
        'time_to' => 'string',
        'date_time_to' => '\DateTime',
        'planned' => 'bool',
        'price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'time_slot_type' => null,
        'time_slot_type_id' => 'int64',
        'activity_id' => 'int64',
        'date_from' => 'date',
        'time_from' => null,
        'date_time_from' => 'date-time',
        'date_to' => 'date',
        'time_to' => null,
        'date_time_to' => 'date-time',
        'planned' => null,
        'price' => 'double'
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
        'time_slot_type' => 'time_slot_type',
        'time_slot_type_id' => 'time_slot_type_id',
        'activity_id' => 'activity_id',
        'date_from' => 'date_from',
        'time_from' => 'time_from',
        'date_time_from' => 'date_time_from',
        'date_to' => 'date_to',
        'time_to' => 'time_to',
        'date_time_to' => 'date_time_to',
        'planned' => 'planned',
        'price' => 'price'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'time_slot_type' => 'setTimeSlotType',
        'time_slot_type_id' => 'setTimeSlotTypeId',
        'activity_id' => 'setActivityId',
        'date_from' => 'setDateFrom',
        'time_from' => 'setTimeFrom',
        'date_time_from' => 'setDateTimeFrom',
        'date_to' => 'setDateTo',
        'time_to' => 'setTimeTo',
        'date_time_to' => 'setDateTimeTo',
        'planned' => 'setPlanned',
        'price' => 'setPrice'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'time_slot_type' => 'getTimeSlotType',
        'time_slot_type_id' => 'getTimeSlotTypeId',
        'activity_id' => 'getActivityId',
        'date_from' => 'getDateFrom',
        'time_from' => 'getTimeFrom',
        'date_time_from' => 'getDateTimeFrom',
        'date_to' => 'getDateTo',
        'time_to' => 'getTimeTo',
        'date_time_to' => 'getDateTimeTo',
        'planned' => 'getPlanned',
        'price' => 'getPrice'
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

    const TIME_SLOT_TYPE_FIRST_ENTRY = 'first-entry';
    const TIME_SLOT_TYPE_PLANNED = 'planned';
    const TIME_SLOT_TYPE_ACTUAL = 'actual';
    const TIME_SLOT_TYPE_ID_1 = 1;
    const TIME_SLOT_TYPE_ID_2 = 2;
    const TIME_SLOT_TYPE_ID_3 = 3;
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTimeSlotTypeAllowableValues()
    {
        return [
            self::TIME_SLOT_TYPE_FIRST_ENTRY,
            self::TIME_SLOT_TYPE_PLANNED,
            self::TIME_SLOT_TYPE_ACTUAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTimeSlotTypeIdAllowableValues()
    {
        return [
            self::TIME_SLOT_TYPE_ID_1,
            self::TIME_SLOT_TYPE_ID_2,
            self::TIME_SLOT_TYPE_ID_3,
        ];
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
    public function __construct(?array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['time_slot_type'] = isset($data['time_slot_type']) ? $data['time_slot_type'] : null;
        $this->container['time_slot_type_id'] = isset($data['time_slot_type_id']) ? $data['time_slot_type_id'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['time_from'] = isset($data['time_from']) ? $data['time_from'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['time_to'] = isset($data['time_to']) ? $data['time_to'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['planned'] = isset($data['planned']) ? $data['planned'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTimeSlotTypeAllowableValues();
        if (!in_array($this->container['time_slot_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'time_slot_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getTimeSlotTypeIdAllowableValues();
        if (!in_array($this->container['time_slot_type_id'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'time_slot_type_id', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getTimeSlotTypeAllowableValues();
        if (!in_array($this->container['time_slot_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getTimeSlotTypeIdAllowableValues();
        if (!in_array($this->container['time_slot_type_id'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets time_slot_type
     * @return string
     */
    public function getTimeSlotType()
    {
        return $this->container['time_slot_type'];
    }

    /**
     * Sets time_slot_type
     * @param string $time_slot_type Time Slot Type. first-entry (:1), planned (:2), actual (:3)
     * @return $this
     */
    public function setTimeSlotType($time_slot_type)
    {
        $allowed_values = $this->getTimeSlotTypeAllowableValues();
        if (!is_null($time_slot_type) && !in_array($time_slot_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'time_slot_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['time_slot_type'] = $time_slot_type;

        return $this;
    }

    /**
     * Gets time_slot_type_id
     * @return int
     */
    public function getTimeSlotTypeId()
    {
        return $this->container['time_slot_type_id'];
    }

    /**
     * Sets time_slot_type_id
     * @param int $time_slot_type_id Time Slot Type ID, by default 1 if left out of the request. 1: first-entry, 2: planned, 3: actual
     * @return $this
     */
    public function setTimeSlotTypeId($time_slot_type_id)
    {
        $allowed_values = $this->getTimeSlotTypeIdAllowableValues();
        if (!is_null($time_slot_type_id) && !in_array($time_slot_type_id, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'time_slot_type_id', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['time_slot_type_id'] = $time_slot_type_id;

        return $this;
    }

    /**
     * Gets activity_id
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     * @param int $activity_id Activity ID to which this TimeSlot belongs
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets date_from
     * @return \DateTime|string|null
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param \DateTime|string|null $date_from
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets time_from
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->container['time_from'];
    }

    /**
     * Sets time_from
     * @param string $time_from
     * @return $this
     */
    public function setTimeFrom($time_from)
    {
        $this->container['time_from'] = $time_from;

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
     * @param \DateTime|string|null $date_time_from
     * @return $this
     */
    public function setDateTimeFrom($date_time_from)
    {
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return \DateTime|string|null
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param \DateTime|string|null $date_to
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets time_to
     * @return string
     */
    public function getTimeTo()
    {
        return $this->container['time_to'];
    }

    /**
     * Sets time_to
     * @param string $time_to
     * @return $this
     */
    public function setTimeTo($time_to)
    {
        $this->container['time_to'] = $time_to;

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
     * @param \DateTime|string|null $date_time_to
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets planned
     * @return bool
     */
    public function getPlanned()
    {
        return $this->container['planned'];
    }

    /**
     * Sets planned
     * @param bool $planned true if this time_slot was used to plan the activity within
     * @return $this
     */
    public function setPlanned($planned)
    {
        $this->container['planned'] = $planned;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price Price for this timeslot
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
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


