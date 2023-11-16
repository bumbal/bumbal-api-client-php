<?php
/**
 * RouteFiltersModel
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
 * RouteFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RouteFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RouteFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int[]',
        'co_driver_ids' => 'int[]',
        'nr' => 'string[]',
        'date_time_from' => '\DateTime',
        'date_time_to' => '\DateTime',
        'earliest_date_time_since' => '\DateTime',
        'earliest_date_time_till' => '\DateTime',
        'latest_date_time_since' => '\DateTime',
        'latest_date_time_till' => '\DateTime',
        'updated_at' => '\DateTime',
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime',
        'active' => 'int[]',
        'status' => 'string[]',
        'status_id' => 'int[]',
        'driver_id' => 'int[]',
        'recurrence_id' => 'int',
        'tag_names' => 'string[]',
        'zone_names' => 'string[]',
        'optimized' => 'bool[]',
        'blocked' => 'bool[]',
        'nr_of_stops' => 'int[]',
        'search_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'co_driver_ids' => null,
        'nr' => null,
        'date_time_from' => 'date-time',
        'date_time_to' => 'date-time',
        'earliest_date_time_since' => 'date-time',
        'earliest_date_time_till' => 'date-time',
        'latest_date_time_since' => 'date-time',
        'latest_date_time_till' => 'date-time',
        'updated_at' => 'date-time',
        'updated_at_since' => 'date-time',
        'updated_at_till' => 'date-time',
        'active' => null,
        'status' => null,
        'status_id' => null,
        'driver_id' => null,
        'recurrence_id' => null,
        'tag_names' => null,
        'zone_names' => null,
        'optimized' => null,
        'blocked' => null,
        'nr_of_stops' => null,
        'search_text' => null
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
        'co_driver_ids' => 'co_driver_ids',
        'nr' => 'nr',
        'date_time_from' => 'date_time_from',
        'date_time_to' => 'date_time_to',
        'earliest_date_time_since' => 'earliest_date_time_since',
        'earliest_date_time_till' => 'earliest_date_time_till',
        'latest_date_time_since' => 'latest_date_time_since',
        'latest_date_time_till' => 'latest_date_time_till',
        'updated_at' => 'updated_at',
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till',
        'active' => 'active',
        'status' => 'status',
        'status_id' => 'status_id',
        'driver_id' => 'driver_id',
        'recurrence_id' => 'recurrence_id',
        'tag_names' => 'tag_names',
        'zone_names' => 'zone_names',
        'optimized' => 'optimized',
        'blocked' => 'blocked',
        'nr_of_stops' => 'nr_of_stops',
        'search_text' => 'search_text'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'co_driver_ids' => 'setCoDriverIds',
        'nr' => 'setNr',
        'date_time_from' => 'setDateTimeFrom',
        'date_time_to' => 'setDateTimeTo',
        'earliest_date_time_since' => 'setEarliestDateTimeSince',
        'earliest_date_time_till' => 'setEarliestDateTimeTill',
        'latest_date_time_since' => 'setLatestDateTimeSince',
        'latest_date_time_till' => 'setLatestDateTimeTill',
        'updated_at' => 'setUpdatedAt',
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill',
        'active' => 'setActive',
        'status' => 'setStatus',
        'status_id' => 'setStatusId',
        'driver_id' => 'setDriverId',
        'recurrence_id' => 'setRecurrenceId',
        'tag_names' => 'setTagNames',
        'zone_names' => 'setZoneNames',
        'optimized' => 'setOptimized',
        'blocked' => 'setBlocked',
        'nr_of_stops' => 'setNrOfStops',
        'search_text' => 'setSearchText'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'co_driver_ids' => 'getCoDriverIds',
        'nr' => 'getNr',
        'date_time_from' => 'getDateTimeFrom',
        'date_time_to' => 'getDateTimeTo',
        'earliest_date_time_since' => 'getEarliestDateTimeSince',
        'earliest_date_time_till' => 'getEarliestDateTimeTill',
        'latest_date_time_since' => 'getLatestDateTimeSince',
        'latest_date_time_till' => 'getLatestDateTimeTill',
        'updated_at' => 'getUpdatedAt',
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill',
        'active' => 'getActive',
        'status' => 'getStatus',
        'status_id' => 'getStatusId',
        'driver_id' => 'getDriverId',
        'recurrence_id' => 'getRecurrenceId',
        'tag_names' => 'getTagNames',
        'zone_names' => 'getZoneNames',
        'optimized' => 'getOptimized',
        'blocked' => 'getBlocked',
        'nr_of_stops' => 'getNrOfStops',
        'search_text' => 'getSearchText'
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
        $this->container['co_driver_ids'] = isset($data['co_driver_ids']) ? $data['co_driver_ids'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['earliest_date_time_since'] = isset($data['earliest_date_time_since']) ? $data['earliest_date_time_since'] : null;
        $this->container['earliest_date_time_till'] = isset($data['earliest_date_time_till']) ? $data['earliest_date_time_till'] : null;
        $this->container['latest_date_time_since'] = isset($data['latest_date_time_since']) ? $data['latest_date_time_since'] : null;
        $this->container['latest_date_time_till'] = isset($data['latest_date_time_till']) ? $data['latest_date_time_till'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['recurrence_id'] = isset($data['recurrence_id']) ? $data['recurrence_id'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['optimized'] = isset($data['optimized']) ? $data['optimized'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['nr_of_stops'] = isset($data['nr_of_stops']) ? $data['nr_of_stops'] : null;
        $this->container['search_text'] = isset($data['search_text']) ? $data['search_text'] : null;
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
     * Gets co_driver_ids
     * @return int[]
     */
    public function getCoDriverIds()
    {
        return $this->container['co_driver_ids'];
    }

    /**
     * Sets co_driver_ids
     * @param int[] $co_driver_ids Unique Identifier
     * @return $this
     */
    public function setCoDriverIds($co_driver_ids)
    {
        $this->container['co_driver_ids'] = $co_driver_ids;

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
     * @param string[] $nr Route nr
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
     * @param \DateTime|string|null $date_time_from
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
     * @param \DateTime|string|null $date_time_to
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets earliest_date_time_since
     * @return \DateTime|string|null
     */
    public function getEarliestDateTimeSince()
    {
        return $this->container['earliest_date_time_since'];
    }

    /**
     * Sets earliest_date_time_since
     * @param \DateTime|string|null $earliest_date_time_since filter routes with an Earliest DateTime To since this input
     * @return $this
     */
    public function setEarliestDateTimeSince($earliest_date_time_since)
    {
        $this->container['earliest_date_time_since'] = $earliest_date_time_since;

        return $this;
    }

    /**
     * Gets earliest_date_time_till
     * @return \DateTime|string|null
     */
    public function getEarliestDateTimeTill()
    {
        return $this->container['earliest_date_time_till'];
    }

    /**
     * Sets earliest_date_time_till
     * @param \DateTime|string|null $earliest_date_time_till filter routes with an Earliest DateTime To till this input
     * @return $this
     */
    public function setEarliestDateTimeTill($earliest_date_time_till)
    {
        $this->container['earliest_date_time_till'] = $earliest_date_time_till;

        return $this;
    }

    /**
     * Gets latest_date_time_since
     * @return \DateTime|string|null
     */
    public function getLatestDateTimeSince()
    {
        return $this->container['latest_date_time_since'];
    }

    /**
     * Sets latest_date_time_since
     * @param \DateTime|string|null $latest_date_time_since filter routes with an Latest DateTime To since this input
     * @return $this
     */
    public function setLatestDateTimeSince($latest_date_time_since)
    {
        $this->container['latest_date_time_since'] = $latest_date_time_since;

        return $this;
    }

    /**
     * Gets latest_date_time_till
     * @return \DateTime|string|null
     */
    public function getLatestDateTimeTill()
    {
        return $this->container['latest_date_time_till'];
    }

    /**
     * Sets latest_date_time_till
     * @param \DateTime|string|null $latest_date_time_till filter routes with an Latest DateTime To till this input
     * @return $this
     */
    public function setLatestDateTimeTill($latest_date_time_till)
    {
        $this->container['latest_date_time_till'] = $latest_date_time_till;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime|string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime|string|null $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param \DateTime|string|null $updated_at_since filter routes with an updated at date-time since this input
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
     * @param \DateTime|string|null $updated_at_till filter routes with an updated at date-time till this input
     * @return $this
     */
    public function setUpdatedAtTill($updated_at_till)
    {
        $this->container['updated_at_till'] = $updated_at_till;

        return $this;
    }

    /**
     * Gets active
     * @return int[]
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param int[] $active Active status of route, 0 values represent deleted routes
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets status
     * @return string[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string[] $status Route Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_id
     * @return int[]
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     * @param int[] $status_id
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets driver_id
     * @return int[]
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     * @param int[] $driver_id
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets recurrence_id
     * @return int
     */
    public function getRecurrenceId()
    {
        return $this->container['recurrence_id'];
    }

    /**
     * Sets recurrence_id
     * @param int $recurrence_id Recurrence ID
     * @return $this
     */
    public function setRecurrenceId($recurrence_id)
    {
        $this->container['recurrence_id'] = $recurrence_id;

        return $this;
    }

    /**
     * Gets tag_names
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     * @param string[] $tag_names Tag names
     * @return $this
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

        return $this;
    }

    /**
     * Gets zone_names
     * @return string[]
     */
    public function getZoneNames()
    {
        return $this->container['zone_names'];
    }

    /**
     * Sets zone_names
     * @param string[] $zone_names Zone names
     * @return $this
     */
    public function setZoneNames($zone_names)
    {
        $this->container['zone_names'] = $zone_names;

        return $this;
    }

    /**
     * Gets optimized
     * @return bool[]
     */
    public function getOptimized()
    {
        return $this->container['optimized'];
    }

    /**
     * Sets optimized
     * @param bool[] $optimized Optimized status of Route.
     * @return $this
     */
    public function setOptimized($optimized)
    {
        $this->container['optimized'] = $optimized;

        return $this;
    }

    /**
     * Gets blocked
     * @return bool[]
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param bool[] $blocked Blocked status of Route
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets nr_of_stops
     * @return int[]
     */
    public function getNrOfStops()
    {
        return $this->container['nr_of_stops'];
    }

    /**
     * Sets nr_of_stops
     * @param int[] $nr_of_stops Number of stops
     * @return $this
     */
    public function setNrOfStops($nr_of_stops)
    {
        $this->container['nr_of_stops'] = $nr_of_stops;

        return $this;
    }

    /**
     * Gets search_text
     * @return string
     */
    public function getSearchText()
    {
        return $this->container['search_text'];
    }

    /**
     * Sets search_text
     * @param string $search_text free search through text and numeric type columns
     * @return $this
     */
    public function setSearchText($search_text)
    {
        $this->container['search_text'] = $search_text;

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


