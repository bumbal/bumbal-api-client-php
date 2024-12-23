<?php
/**
 * LogModel
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
 * LogModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LogModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LogModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original_message' => 'string',
        'message' => 'string',
        'full_message' => 'object',
        'channel' => 'string',
        'level_text' => 'string',
        'http_method' => 'string',
        'api_endpoint' => 'string',
        'client_ip' => 'string',
        'request_id' => 'string',
        'log_type' => 'string',
        'timestamp' => 'string',
        'user' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original_message' => null,
        'message' => null,
        'full_message' => null,
        'channel' => null,
        'level_text' => null,
        'http_method' => null,
        'api_endpoint' => null,
        'client_ip' => null,
        'request_id' => null,
        'log_type' => null,
        'timestamp' => null,
        'user' => null
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
        'original_message' => 'original_message',
        'message' => 'message',
        'full_message' => 'full_message',
        'channel' => 'channel',
        'level_text' => 'level_text',
        'http_method' => 'http_method',
        'api_endpoint' => 'api_endpoint',
        'client_ip' => 'client_ip',
        'request_id' => 'request_id',
        'log_type' => 'log_type',
        'timestamp' => 'timestamp',
        'user' => 'user'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'original_message' => 'setOriginalMessage',
        'message' => 'setMessage',
        'full_message' => 'setFullMessage',
        'channel' => 'setChannel',
        'level_text' => 'setLevelText',
        'http_method' => 'setHttpMethod',
        'api_endpoint' => 'setApiEndpoint',
        'client_ip' => 'setClientIp',
        'request_id' => 'setRequestId',
        'log_type' => 'setLogType',
        'timestamp' => 'setTimestamp',
        'user' => 'setUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'original_message' => 'getOriginalMessage',
        'message' => 'getMessage',
        'full_message' => 'getFullMessage',
        'channel' => 'getChannel',
        'level_text' => 'getLevelText',
        'http_method' => 'getHttpMethod',
        'api_endpoint' => 'getApiEndpoint',
        'client_ip' => 'getClientIp',
        'request_id' => 'getRequestId',
        'log_type' => 'getLogType',
        'timestamp' => 'getTimestamp',
        'user' => 'getUser'
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

    const LEVEL_TEXT_DEBUG = 'debug';
    const LEVEL_TEXT_INFO = 'info';
    const LEVEL_TEXT_NOTICE = 'notice';
    const LEVEL_TEXT_WARNING = 'warning';
    const LEVEL_TEXT_ERROR = 'error';
    const LEVEL_TEXT_CRITICAL = 'critical';
    const LEVEL_TEXT_ALERT = 'alert';
    const LEVEL_TEXT_EMERGENCY = 'emergency';
    const HTTP_METHOD_POST = 'POST';
    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_PATCH = 'PATCH';
    const HTTP_METHOD_DELETE = 'DELETE';
    const HTTP_METHOD_PUT = 'PUT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLevelTextAllowableValues()
    {
        return [
            self::LEVEL_TEXT_DEBUG,
            self::LEVEL_TEXT_INFO,
            self::LEVEL_TEXT_NOTICE,
            self::LEVEL_TEXT_WARNING,
            self::LEVEL_TEXT_ERROR,
            self::LEVEL_TEXT_CRITICAL,
            self::LEVEL_TEXT_ALERT,
            self::LEVEL_TEXT_EMERGENCY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getHttpMethodAllowableValues()
    {
        return [
            self::HTTP_METHOD_POST,
            self::HTTP_METHOD_GET,
            self::HTTP_METHOD_PATCH,
            self::HTTP_METHOD_DELETE,
            self::HTTP_METHOD_PUT,
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
        $this->container['original_message'] = isset($data['original_message']) ? $data['original_message'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['full_message'] = isset($data['full_message']) ? $data['full_message'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['level_text'] = isset($data['level_text']) ? $data['level_text'] : null;
        $this->container['http_method'] = isset($data['http_method']) ? $data['http_method'] : null;
        $this->container['api_endpoint'] = isset($data['api_endpoint']) ? $data['api_endpoint'] : null;
        $this->container['client_ip'] = isset($data['client_ip']) ? $data['client_ip'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['log_type'] = isset($data['log_type']) ? $data['log_type'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getLevelTextAllowableValues();
        if (!in_array($this->container['level_text'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'level_text', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getHttpMethodAllowableValues();
        if (!in_array($this->container['http_method'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'http_method', must be one of '%s'",
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

        $allowed_values = $this->getLevelTextAllowableValues();
        if (!in_array($this->container['level_text'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getHttpMethodAllowableValues();
        if (!in_array($this->container['http_method'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets original_message
     * @return string
     */
    public function getOriginalMessage()
    {
        return $this->container['original_message'];
    }

    /**
     * Sets original_message
     * @param string $original_message The log message.
     * @return $this
     */
    public function setOriginalMessage($original_message)
    {
        $this->container['original_message'] = $original_message;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message The log message. Can be decorated with extra data
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets full_message
     * @return object
     */
    public function getFullMessage()
    {
        return $this->container['full_message'];
    }

    /**
     * Sets full_message
     * @param object $full_message Any additional data you want to store about this log message
     * @return $this
     */
    public function setFullMessage($full_message)
    {
        $this->container['full_message'] = $full_message;

        return $this;
    }

    /**
     * Gets channel
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     * @param string $channel Groups log messages
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets level_text
     * @return string
     */
    public function getLevelText()
    {
        return $this->container['level_text'];
    }

    /**
     * Sets level_text
     * @param string $level_text Log level
     * @return $this
     */
    public function setLevelText($level_text)
    {
        $allowed_values = $this->getLevelTextAllowableValues();
        if (!is_null($level_text) && !in_array($level_text, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'level_text', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['level_text'] = $level_text;

        return $this;
    }

    /**
     * Gets http_method
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     * @param string $http_method HTTP method
     * @return $this
     */
    public function setHttpMethod($http_method)
    {
        $allowed_values = $this->getHttpMethodAllowableValues();
        if (!is_null($http_method) && !in_array($http_method, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_method', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets api_endpoint
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->container['api_endpoint'];
    }

    /**
     * Sets api_endpoint
     * @param string $api_endpoint Path of API endpoint
     * @return $this
     */
    public function setApiEndpoint($api_endpoint)
    {
        $this->container['api_endpoint'] = $api_endpoint;

        return $this;
    }

    /**
     * Gets client_ip
     * @return string
     */
    public function getClientIp()
    {
        return $this->container['client_ip'];
    }

    /**
     * Sets client_ip
     * @param string $client_ip Client IP
     * @return $this
     */
    public function setClientIp($client_ip)
    {
        $this->container['client_ip'] = $client_ip;

        return $this;
    }

    /**
     * Gets request_id
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     * @param string $request_id Identifier to relate different log messages
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets log_type
     * @return string
     */
    public function getLogType()
    {
        return $this->container['log_type'];
    }

    /**
     * Sets log_type
     * @param string $log_type Type of log message
     * @return $this
     */
    public function setLogType($log_type)
    {
        $this->container['log_type'] = $log_type;

        return $this;
    }

    /**
     * Gets timestamp
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param string $timestamp Datetime of log message
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets user
     * @return object
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param object $user User details
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


