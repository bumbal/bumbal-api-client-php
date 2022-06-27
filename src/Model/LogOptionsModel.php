<?php
/**
 * LogOptionsModel
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
 * Contact: gerb@bumbal.eu
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
 * LogOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LogOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LogOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_message' => 'bool',
        'include_timestamp' => 'bool',
        'include_full_message' => 'bool',
        'include_original_message' => 'bool',
        'include_client_ip' => 'bool',
        'include_http_method' => 'bool',
        'include_api_endpoint' => 'bool',
        'include_level_text' => 'bool',
        'include_request_id' => 'bool',
        'include_channel' => 'bool',
        'include_log_type' => 'bool',
        'include_user' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_message' => null,
        'include_timestamp' => null,
        'include_full_message' => null,
        'include_original_message' => null,
        'include_client_ip' => null,
        'include_http_method' => null,
        'include_api_endpoint' => null,
        'include_level_text' => null,
        'include_request_id' => null,
        'include_channel' => null,
        'include_log_type' => null,
        'include_user' => null
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
        'include_message' => 'include_message',
        'include_timestamp' => 'include_timestamp',
        'include_full_message' => 'include_full_message',
        'include_original_message' => 'include_original_message',
        'include_client_ip' => 'include_client_ip',
        'include_http_method' => 'include_http_method',
        'include_api_endpoint' => 'include_api_endpoint',
        'include_level_text' => 'include_level_text',
        'include_request_id' => 'include_request_id',
        'include_channel' => 'include_channel',
        'include_log_type' => 'include_log_type',
        'include_user' => 'include_user'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_message' => 'setIncludeMessage',
        'include_timestamp' => 'setIncludeTimestamp',
        'include_full_message' => 'setIncludeFullMessage',
        'include_original_message' => 'setIncludeOriginalMessage',
        'include_client_ip' => 'setIncludeClientIp',
        'include_http_method' => 'setIncludeHttpMethod',
        'include_api_endpoint' => 'setIncludeApiEndpoint',
        'include_level_text' => 'setIncludeLevelText',
        'include_request_id' => 'setIncludeRequestId',
        'include_channel' => 'setIncludeChannel',
        'include_log_type' => 'setIncludeLogType',
        'include_user' => 'setIncludeUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_message' => 'getIncludeMessage',
        'include_timestamp' => 'getIncludeTimestamp',
        'include_full_message' => 'getIncludeFullMessage',
        'include_original_message' => 'getIncludeOriginalMessage',
        'include_client_ip' => 'getIncludeClientIp',
        'include_http_method' => 'getIncludeHttpMethod',
        'include_api_endpoint' => 'getIncludeApiEndpoint',
        'include_level_text' => 'getIncludeLevelText',
        'include_request_id' => 'getIncludeRequestId',
        'include_channel' => 'getIncludeChannel',
        'include_log_type' => 'getIncludeLogType',
        'include_user' => 'getIncludeUser'
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
        $this->container['include_message'] = isset($data['include_message']) ? $data['include_message'] : null;
        $this->container['include_timestamp'] = isset($data['include_timestamp']) ? $data['include_timestamp'] : null;
        $this->container['include_full_message'] = isset($data['include_full_message']) ? $data['include_full_message'] : null;
        $this->container['include_original_message'] = isset($data['include_original_message']) ? $data['include_original_message'] : null;
        $this->container['include_client_ip'] = isset($data['include_client_ip']) ? $data['include_client_ip'] : null;
        $this->container['include_http_method'] = isset($data['include_http_method']) ? $data['include_http_method'] : null;
        $this->container['include_api_endpoint'] = isset($data['include_api_endpoint']) ? $data['include_api_endpoint'] : null;
        $this->container['include_level_text'] = isset($data['include_level_text']) ? $data['include_level_text'] : null;
        $this->container['include_request_id'] = isset($data['include_request_id']) ? $data['include_request_id'] : null;
        $this->container['include_channel'] = isset($data['include_channel']) ? $data['include_channel'] : null;
        $this->container['include_log_type'] = isset($data['include_log_type']) ? $data['include_log_type'] : null;
        $this->container['include_user'] = isset($data['include_user']) ? $data['include_user'] : null;
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
     * Gets include_message
     * @return bool
     */
    public function getIncludeMessage()
    {
        return $this->container['include_message'];
    }

    /**
     * Sets include_message
     * @param bool $include_message Default = true
     * @return $this
     */
    public function setIncludeMessage($include_message)
    {
        $this->container['include_message'] = $include_message;

        return $this;
    }

    /**
     * Gets include_timestamp
     * @return bool
     */
    public function getIncludeTimestamp()
    {
        return $this->container['include_timestamp'];
    }

    /**
     * Sets include_timestamp
     * @param bool $include_timestamp Default = true
     * @return $this
     */
    public function setIncludeTimestamp($include_timestamp)
    {
        $this->container['include_timestamp'] = $include_timestamp;

        return $this;
    }

    /**
     * Gets include_full_message
     * @return bool
     */
    public function getIncludeFullMessage()
    {
        return $this->container['include_full_message'];
    }

    /**
     * Sets include_full_message
     * @param bool $include_full_message Default = false
     * @return $this
     */
    public function setIncludeFullMessage($include_full_message)
    {
        $this->container['include_full_message'] = $include_full_message;

        return $this;
    }

    /**
     * Gets include_original_message
     * @return bool
     */
    public function getIncludeOriginalMessage()
    {
        return $this->container['include_original_message'];
    }

    /**
     * Sets include_original_message
     * @param bool $include_original_message Default = false
     * @return $this
     */
    public function setIncludeOriginalMessage($include_original_message)
    {
        $this->container['include_original_message'] = $include_original_message;

        return $this;
    }

    /**
     * Gets include_client_ip
     * @return bool
     */
    public function getIncludeClientIp()
    {
        return $this->container['include_client_ip'];
    }

    /**
     * Sets include_client_ip
     * @param bool $include_client_ip Default = false
     * @return $this
     */
    public function setIncludeClientIp($include_client_ip)
    {
        $this->container['include_client_ip'] = $include_client_ip;

        return $this;
    }

    /**
     * Gets include_http_method
     * @return bool
     */
    public function getIncludeHttpMethod()
    {
        return $this->container['include_http_method'];
    }

    /**
     * Sets include_http_method
     * @param bool $include_http_method Default = false
     * @return $this
     */
    public function setIncludeHttpMethod($include_http_method)
    {
        $this->container['include_http_method'] = $include_http_method;

        return $this;
    }

    /**
     * Gets include_api_endpoint
     * @return bool
     */
    public function getIncludeApiEndpoint()
    {
        return $this->container['include_api_endpoint'];
    }

    /**
     * Sets include_api_endpoint
     * @param bool $include_api_endpoint Default = false
     * @return $this
     */
    public function setIncludeApiEndpoint($include_api_endpoint)
    {
        $this->container['include_api_endpoint'] = $include_api_endpoint;

        return $this;
    }

    /**
     * Gets include_level_text
     * @return bool
     */
    public function getIncludeLevelText()
    {
        return $this->container['include_level_text'];
    }

    /**
     * Sets include_level_text
     * @param bool $include_level_text Default = false
     * @return $this
     */
    public function setIncludeLevelText($include_level_text)
    {
        $this->container['include_level_text'] = $include_level_text;

        return $this;
    }

    /**
     * Gets include_request_id
     * @return bool
     */
    public function getIncludeRequestId()
    {
        return $this->container['include_request_id'];
    }

    /**
     * Sets include_request_id
     * @param bool $include_request_id Default = false
     * @return $this
     */
    public function setIncludeRequestId($include_request_id)
    {
        $this->container['include_request_id'] = $include_request_id;

        return $this;
    }

    /**
     * Gets include_channel
     * @return bool
     */
    public function getIncludeChannel()
    {
        return $this->container['include_channel'];
    }

    /**
     * Sets include_channel
     * @param bool $include_channel Default = false
     * @return $this
     */
    public function setIncludeChannel($include_channel)
    {
        $this->container['include_channel'] = $include_channel;

        return $this;
    }

    /**
     * Gets include_log_type
     * @return bool
     */
    public function getIncludeLogType()
    {
        return $this->container['include_log_type'];
    }

    /**
     * Sets include_log_type
     * @param bool $include_log_type Default = false
     * @return $this
     */
    public function setIncludeLogType($include_log_type)
    {
        $this->container['include_log_type'] = $include_log_type;

        return $this;
    }

    /**
     * Gets include_user
     * @return bool
     */
    public function getIncludeUser()
    {
        return $this->container['include_user'];
    }

    /**
     * Sets include_user
     * @param bool $include_user Default = false
     * @return $this
     */
    public function setIncludeUser($include_user)
    {
        $this->container['include_user'] = $include_user;

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


