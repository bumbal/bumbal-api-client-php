<?php
/**
 * AddressRetrieveListArguments
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
 * AddressRetrieveListArguments Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressRetrieveListArguments implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressRetrieveListArguments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'options' => '\BumbalClient\Model\AddressOptionsModel',
        'filters' => '\BumbalClient\Model\AddressFiltersModel',
        'limit' => 'int',
        'offset' => 'int',
        'search_exact' => 'bool',
        'search_relevance' => 'bool',
        'search_text' => 'string',
        'as_list' => 'bool'
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
        'search_exact' => null,
        'search_relevance' => null,
        'search_text' => null,
        'as_list' => null
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
        'search_exact' => 'search_exact',
        'search_relevance' => 'search_relevance',
        'search_text' => 'search_text',
        'as_list' => 'as_list'
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
        'search_exact' => 'setSearchExact',
        'search_relevance' => 'setSearchRelevance',
        'search_text' => 'setSearchText',
        'as_list' => 'setAsList'
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
        'search_exact' => 'getSearchExact',
        'search_relevance' => 'getSearchRelevance',
        'search_text' => 'getSearchText',
        'as_list' => 'getAsList'
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
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['search_exact'] = isset($data['search_exact']) ? $data['search_exact'] : null;
        $this->container['search_relevance'] = isset($data['search_relevance']) ? $data['search_relevance'] : null;
        $this->container['search_text'] = isset($data['search_text']) ? $data['search_text'] : null;
        $this->container['as_list'] = isset($data['as_list']) ? $data['as_list'] : null;
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
     * Gets options
     * @return \BumbalClient\Model\AddressOptionsModel
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \BumbalClient\Model\AddressOptionsModel $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets filters
     * @return \BumbalClient\Model\AddressFiltersModel
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param \BumbalClient\Model\AddressFiltersModel $filters
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
     * Gets search_exact
     * @return bool
     */
    public function getSearchExact()
    {
        return $this->container['search_exact'];
    }

    /**
     * Sets search_exact
     * @param bool $search_exact Only return exact matches to search_text (only used when advanced searching is enabled on environment)
     * @return $this
     */
    public function setSearchExact($search_exact)
    {
        $this->container['search_exact'] = $search_exact;

        return $this;
    }

    /**
     * Gets search_relevance
     * @return bool
     */
    public function getSearchRelevance()
    {
        return $this->container['search_relevance'];
    }

    /**
     * Sets search_relevance
     * @param bool $search_relevance Override default sorting by search_text matching score (only used when advanced searching is enabled on environment)
     * @return $this
     */
    public function setSearchRelevance($search_relevance)
    {
        $this->container['search_relevance'] = $search_relevance;

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


