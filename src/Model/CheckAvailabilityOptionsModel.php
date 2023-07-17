<?php
/**
 * CheckAvailabilityOptionsModel
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
 * CheckAvailabilityOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckAvailabilityOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckAvailabilityOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_impact' => 'bool',
        'synchronous' => 'bool',
        'include_capacities' => 'bool',
        'include_proposed_plan_times' => 'bool',
        'include_proposed_driver' => 'bool',
        'activity_times_margins_leading' => 'bool',
        'apply_cut_off_times' => 'bool',
        'consider_historic_traffic_info' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_impact' => null,
        'synchronous' => null,
        'include_capacities' => null,
        'include_proposed_plan_times' => null,
        'include_proposed_driver' => null,
        'activity_times_margins_leading' => null,
        'apply_cut_off_times' => null,
        'consider_historic_traffic_info' => null
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
        'include_impact' => 'include_impact',
        'synchronous' => 'synchronous',
        'include_capacities' => 'include_capacities',
        'include_proposed_plan_times' => 'include_proposed_plan_times',
        'include_proposed_driver' => 'include_proposed_driver',
        'activity_times_margins_leading' => 'activity_times_margins_leading',
        'apply_cut_off_times' => 'apply_cut_off_times',
        'consider_historic_traffic_info' => 'consider_historic_traffic_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_impact' => 'setIncludeImpact',
        'synchronous' => 'setSynchronous',
        'include_capacities' => 'setIncludeCapacities',
        'include_proposed_plan_times' => 'setIncludeProposedPlanTimes',
        'include_proposed_driver' => 'setIncludeProposedDriver',
        'activity_times_margins_leading' => 'setActivityTimesMarginsLeading',
        'apply_cut_off_times' => 'setApplyCutOffTimes',
        'consider_historic_traffic_info' => 'setConsiderHistoricTrafficInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_impact' => 'getIncludeImpact',
        'synchronous' => 'getSynchronous',
        'include_capacities' => 'getIncludeCapacities',
        'include_proposed_plan_times' => 'getIncludeProposedPlanTimes',
        'include_proposed_driver' => 'getIncludeProposedDriver',
        'activity_times_margins_leading' => 'getActivityTimesMarginsLeading',
        'apply_cut_off_times' => 'getApplyCutOffTimes',
        'consider_historic_traffic_info' => 'getConsiderHistoricTrafficInfo'
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
        $this->container['include_impact'] = isset($data['include_impact']) ? $data['include_impact'] : null;
        $this->container['synchronous'] = isset($data['synchronous']) ? $data['synchronous'] : null;
        $this->container['include_capacities'] = isset($data['include_capacities']) ? $data['include_capacities'] : null;
        $this->container['include_proposed_plan_times'] = isset($data['include_proposed_plan_times']) ? $data['include_proposed_plan_times'] : null;
        $this->container['include_proposed_driver'] = isset($data['include_proposed_driver']) ? $data['include_proposed_driver'] : null;
        $this->container['activity_times_margins_leading'] = isset($data['activity_times_margins_leading']) ? $data['activity_times_margins_leading'] : null;
        $this->container['apply_cut_off_times'] = isset($data['apply_cut_off_times']) ? $data['apply_cut_off_times'] : null;
        $this->container['consider_historic_traffic_info'] = isset($data['consider_historic_traffic_info']) ? $data['consider_historic_traffic_info'] : null;
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
     * Gets include_impact
     * @return bool
     */
    public function getIncludeImpact()
    {
        return $this->container['include_impact'];
    }

    /**
     * Sets include_impact
     * @param bool $include_impact
     * @return $this
     */
    public function setIncludeImpact($include_impact)
    {
        $this->container['include_impact'] = $include_impact;

        return $this;
    }

    /**
     * Gets synchronous
     * @return bool
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     * @param bool $synchronous
     * @return $this
     */
    public function setSynchronous($synchronous)
    {
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets include_capacities
     * @return bool
     */
    public function getIncludeCapacities()
    {
        return $this->container['include_capacities'];
    }

    /**
     * Sets include_capacities
     * @param bool $include_capacities
     * @return $this
     */
    public function setIncludeCapacities($include_capacities)
    {
        $this->container['include_capacities'] = $include_capacities;

        return $this;
    }

    /**
     * Gets include_proposed_plan_times
     * @return bool
     */
    public function getIncludeProposedPlanTimes()
    {
        return $this->container['include_proposed_plan_times'];
    }

    /**
     * Sets include_proposed_plan_times
     * @param bool $include_proposed_plan_times
     * @return $this
     */
    public function setIncludeProposedPlanTimes($include_proposed_plan_times)
    {
        $this->container['include_proposed_plan_times'] = $include_proposed_plan_times;

        return $this;
    }

    /**
     * Gets include_proposed_driver
     * @return bool
     */
    public function getIncludeProposedDriver()
    {
        return $this->container['include_proposed_driver'];
    }

    /**
     * Sets include_proposed_driver
     * @param bool $include_proposed_driver
     * @return $this
     */
    public function setIncludeProposedDriver($include_proposed_driver)
    {
        $this->container['include_proposed_driver'] = $include_proposed_driver;

        return $this;
    }

    /**
     * Gets activity_times_margins_leading
     * @return bool
     */
    public function getActivityTimesMarginsLeading()
    {
        return $this->container['activity_times_margins_leading'];
    }

    /**
     * Sets activity_times_margins_leading
     * @param bool $activity_times_margins_leading default: true
     * @return $this
     */
    public function setActivityTimesMarginsLeading($activity_times_margins_leading)
    {
        $this->container['activity_times_margins_leading'] = $activity_times_margins_leading;

        return $this;
    }

    /**
     * Gets apply_cut_off_times
     * @return bool
     */
    public function getApplyCutOffTimes()
    {
        return $this->container['apply_cut_off_times'];
    }

    /**
     * Sets apply_cut_off_times
     * @param bool $apply_cut_off_times default: true
     * @return $this
     */
    public function setApplyCutOffTimes($apply_cut_off_times)
    {
        $this->container['apply_cut_off_times'] = $apply_cut_off_times;

        return $this;
    }

    /**
     * Gets consider_historic_traffic_info
     * @return bool
     */
    public function getConsiderHistoricTrafficInfo()
    {
        return $this->container['consider_historic_traffic_info'];
    }

    /**
     * Sets consider_historic_traffic_info
     * @param bool $consider_historic_traffic_info
     * @return $this
     */
    public function setConsiderHistoricTrafficInfo($consider_historic_traffic_info)
    {
        $this->container['consider_historic_traffic_info'] = $consider_historic_traffic_info;

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


