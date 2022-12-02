<?php
/**
 * AssignmentRetrieveListArguments
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
 * AssignmentRetrieveListArguments Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssignmentRetrieveListArguments implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AssignmentRetrieveListArguments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'options' => '\BumbalClient\Model\AssignmentOptionsModel',
        'filters' => '\BumbalClient\Model\AssignmentFiltersModel',
        'limit' => 'int',
        'offset' => 'int',
        'search_text' => 'string',
        'sorting_column' => 'string',
        'sorting_direction' => 'string',
        'as_list' => 'bool',
        'count_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'options' => null,
        'filters' => null,
        'limit' => 'int64',
        'offset' => 'int64',
        'search_text' => null,
        'sorting_column' => null,
        'sorting_direction' => null,
        'as_list' => null,
        'count_only' => null
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
        'options' => 'options',
        'filters' => 'filters',
        'limit' => 'limit',
        'offset' => 'offset',
        'search_text' => 'search_text',
        'sorting_column' => 'sorting_column',
        'sorting_direction' => 'sorting_direction',
        'as_list' => 'as_list',
        'count_only' => 'count_only'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'options' => 'setOptions',
        'filters' => 'setFilters',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'search_text' => 'setSearchText',
        'sorting_column' => 'setSortingColumn',
        'sorting_direction' => 'setSortingDirection',
        'as_list' => 'setAsList',
        'count_only' => 'setCountOnly'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'options' => 'getOptions',
        'filters' => 'getFilters',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'search_text' => 'getSearchText',
        'sorting_column' => 'getSortingColumn',
        'sorting_direction' => 'getSortingDirection',
        'as_list' => 'getAsList',
        'count_only' => 'getCountOnly'
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

    const SORTING_COLUMN_ASSIGNMENTNR = 'assignment.nr';
    const SORTING_COLUMN_DATE_TIME_FROM = 'date_time_from';
    const SORTING_COLUMN_DATE_TIME_TO = 'date_time_to';
    const SORTING_COLUMN_PARTY_NAME = 'party_name';
    const SORTING_COLUMN_ACCOUNT_NAME = 'account_name';
    const SORTING_DIRECTION_ASC = 'asc';
    const SORTING_DIRECTION_DESC = 'desc';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSortingColumnAllowableValues()
    {
        return [
            self::SORTING_COLUMN_ASSIGNMENTNR,
            self::SORTING_COLUMN_DATE_TIME_FROM,
            self::SORTING_COLUMN_DATE_TIME_TO,
            self::SORTING_COLUMN_PARTY_NAME,
            self::SORTING_COLUMN_ACCOUNT_NAME,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSortingDirectionAllowableValues()
    {
        return [
            self::SORTING_DIRECTION_ASC,
            self::SORTING_DIRECTION_DESC,
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
    public function __construct(array $data = null)
    {
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['search_text'] = isset($data['search_text']) ? $data['search_text'] : null;
        $this->container['sorting_column'] = isset($data['sorting_column']) ? $data['sorting_column'] : null;
        $this->container['sorting_direction'] = isset($data['sorting_direction']) ? $data['sorting_direction'] : null;
        $this->container['as_list'] = isset($data['as_list']) ? $data['as_list'] : null;
        $this->container['count_only'] = isset($data['count_only']) ? $data['count_only'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getSortingColumnAllowableValues();
        if (!in_array($this->container['sorting_column'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'sorting_column', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getSortingDirectionAllowableValues();
        if (!in_array($this->container['sorting_direction'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'sorting_direction', must be one of '%s'",
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

        $allowed_values = $this->getSortingColumnAllowableValues();
        if (!in_array($this->container['sorting_column'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getSortingDirectionAllowableValues();
        if (!in_array($this->container['sorting_direction'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets options
     * @return \BumbalClient\Model\AssignmentOptionsModel
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \BumbalClient\Model\AssignmentOptionsModel $options 
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets filters
     * @return \BumbalClient\Model\AssignmentFiltersModel
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param \BumbalClient\Model\AssignmentFiltersModel $filters 
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param int $limit 
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param int $offset 
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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
     * @param string $search_text 
     * @return $this
     */
    public function setSearchText($search_text)
    {
        $this->container['search_text'] = $search_text;

        return $this;
    }

    /**
     * Gets sorting_column
     * @return string
     */
    public function getSortingColumn()
    {
        return $this->container['sorting_column'];
    }

    /**
     * Sets sorting_column
     * @param string $sorting_column Sorting Column. Option include_party_name has to be set for party_name as the sorting column. Option include_booking_account has to be set for account_name as the sorting column.
     * @return $this
     */
    public function setSortingColumn($sorting_column)
    {
        $allowed_values = $this->getSortingColumnAllowableValues();
        if (!is_null($sorting_column) && !in_array($sorting_column, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sorting_column', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['sorting_column'] = $sorting_column;

        return $this;
    }

    /**
     * Gets sorting_direction
     * @return string
     */
    public function getSortingDirection()
    {
        return $this->container['sorting_direction'];
    }

    /**
     * Sets sorting_direction
     * @param string $sorting_direction Sorting Direction
     * @return $this
     */
    public function setSortingDirection($sorting_direction)
    {
        $allowed_values = $this->getSortingDirectionAllowableValues();
        if (!is_null($sorting_direction) && !in_array($sorting_direction, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sorting_direction', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['sorting_direction'] = $sorting_direction;

        return $this;
    }

    /**
     * Gets as_list
     * @return bool
     */
    public function getAsList()
    {
        return $this->container['as_list'];
    }

    /**
     * Sets as_list
     * @param bool $as_list 
     * @return $this
     */
    public function setAsList($as_list)
    {
        $this->container['as_list'] = $as_list;

        return $this;
    }

    /**
     * Gets count_only
     * @return bool
     */
    public function getCountOnly()
    {
        return $this->container['count_only'];
    }

    /**
     * Sets count_only
     * @param bool $count_only 
     * @return $this
     */
    public function setCountOnly($count_only)
    {
        $this->container['count_only'] = $count_only;

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


