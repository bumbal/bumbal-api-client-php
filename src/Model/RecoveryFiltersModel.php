<?php
/**
 * RecoveryFiltersModel
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
 * RecoveryFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecoveryFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecoveryFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime',
        'id' => 'int[]',
        'nr' => 'string[]',
        'active' => 'int[]',
        'nr_of_packages' => 'float',
        'package_type_name' => 'string[]',
        'package_type_id' => 'int[]',
        'capacities' => '\BumbalClient\Model\CapacityModel[]',
        'barcode' => 'string[]',
        'description' => 'string',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'activity_id' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'updated_at_since' => 'date-time',
        'updated_at_till' => 'date-time',
        'id' => null,
        'nr' => null,
        'active' => null,
        'nr_of_packages' => 'float',
        'package_type_name' => null,
        'package_type_id' => null,
        'capacities' => null,
        'barcode' => null,
        'description' => null,
        'links' => null,
        'activity_id' => null
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
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till',
        'id' => 'id',
        'nr' => 'nr',
        'active' => 'active',
        'nr_of_packages' => 'nr_of_packages',
        'package_type_name' => 'package_type_name',
        'package_type_id' => 'package_type_id',
        'capacities' => 'capacities',
        'barcode' => 'barcode',
        'description' => 'description',
        'links' => 'links',
        'activity_id' => 'activity_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill',
        'id' => 'setId',
        'nr' => 'setNr',
        'active' => 'setActive',
        'nr_of_packages' => 'setNrOfPackages',
        'package_type_name' => 'setPackageTypeName',
        'package_type_id' => 'setPackageTypeId',
        'capacities' => 'setCapacities',
        'barcode' => 'setBarcode',
        'description' => 'setDescription',
        'links' => 'setLinks',
        'activity_id' => 'setActivityId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill',
        'id' => 'getId',
        'nr' => 'getNr',
        'active' => 'getActive',
        'nr_of_packages' => 'getNrOfPackages',
        'package_type_name' => 'getPackageTypeName',
        'package_type_id' => 'getPackageTypeId',
        'capacities' => 'getCapacities',
        'barcode' => 'getBarcode',
        'description' => 'getDescription',
        'links' => 'getLinks',
        'activity_id' => 'getActivityId'
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
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['nr_of_packages'] = isset($data['nr_of_packages']) ? $data['nr_of_packages'] : null;
        $this->container['package_type_name'] = isset($data['package_type_name']) ? $data['package_type_name'] : null;
        $this->container['package_type_id'] = isset($data['package_type_id']) ? $data['package_type_id'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
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
     * Gets id
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id Bumbal package line id's
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
     * @param string[] $nr Recovery numbers
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

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
     * @param int[] $active Active status of Recovery, 0 values represent deleted Recoveries
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets nr_of_packages
     * @return float
     */
    public function getNrOfPackages()
    {
        return $this->container['nr_of_packages'];
    }

    /**
     * Sets nr_of_packages
     * @param float $nr_of_packages Number of packages in recovery line
     * @return $this
     */
    public function setNrOfPackages($nr_of_packages)
    {
        $this->container['nr_of_packages'] = $nr_of_packages;

        return $this;
    }

    /**
     * Gets package_type_name
     * @return string[]
     */
    public function getPackageTypeName()
    {
        return $this->container['package_type_name'];
    }

    /**
     * Sets package_type_name
     * @param string[] $package_type_name Type of the Packages
     * @return $this
     */
    public function setPackageTypeName($package_type_name)
    {
        $this->container['package_type_name'] = $package_type_name;

        return $this;
    }

    /**
     * Gets package_type_id
     * @return int[]
     */
    public function getPackageTypeId()
    {
        return $this->container['package_type_id'];
    }

    /**
     * Sets package_type_id
     * @param int[] $package_type_id ID of the package type for the packages
     * @return $this
     */
    public function setPackageTypeId($package_type_id)
    {
        $this->container['package_type_id'] = $package_type_id;

        return $this;
    }

    /**
     * Gets capacities
     * @return \BumbalClient\Model\CapacityModel[]
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     * @param \BumbalClient\Model\CapacityModel[] $capacities
     * @return $this
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets barcode
     * @return string[]
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     * @param string[] $barcode barcode for recoveries/returns
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description description of this package_line
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \BumbalClient\Model\LinkModel[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets activity_id
     * @return int[]
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     * @param int[] $activity_id Activity id
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

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


