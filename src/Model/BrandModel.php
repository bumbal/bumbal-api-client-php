<?php
/**
 * BrandModel
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
 * BrandModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BrandModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BrandModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'brand_colours' => '\BumbalClient\Model\BrandColourModel[]',
        'files' => '\BumbalClient\Model\FileModel[]',
        'portal_settings' => '\BumbalClient\Model\PortalSettingModel[]',
        'brand_created_by' => '\BumbalClient\Model\UsersModel',
        'brand_updated_by' => '\BumbalClient\Model\UsersModel',
        'brand_created_at' => '\DateTime',
        'brand_updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'tags' => null,
        'links' => null,
        'meta_data' => null,
        'brand_colours' => null,
        'files' => null,
        'portal_settings' => null,
        'brand_created_by' => null,
        'brand_updated_by' => null,
        'brand_created_at' => 'date-time',
        'brand_updated_at' => 'date-time'
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
        'name' => 'name',
        'tags' => 'tags',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'brand_colours' => 'brand_colours',
        'files' => 'files',
        'portal_settings' => 'portal_settings',
        'brand_created_by' => 'brand_created_by',
        'brand_updated_by' => 'brand_updated_by',
        'brand_created_at' => 'brand_created_at',
        'brand_updated_at' => 'brand_updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'tags' => 'setTags',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'brand_colours' => 'setBrandColours',
        'files' => 'setFiles',
        'portal_settings' => 'setPortalSettings',
        'brand_created_by' => 'setBrandCreatedBy',
        'brand_updated_by' => 'setBrandUpdatedBy',
        'brand_created_at' => 'setBrandCreatedAt',
        'brand_updated_at' => 'setBrandUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'tags' => 'getTags',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'brand_colours' => 'getBrandColours',
        'files' => 'getFiles',
        'portal_settings' => 'getPortalSettings',
        'brand_created_by' => 'getBrandCreatedBy',
        'brand_updated_by' => 'getBrandUpdatedBy',
        'brand_created_at' => 'getBrandCreatedAt',
        'brand_updated_at' => 'getBrandUpdatedAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['brand_colours'] = isset($data['brand_colours']) ? $data['brand_colours'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['portal_settings'] = isset($data['portal_settings']) ? $data['portal_settings'] : null;
        $this->container['brand_created_by'] = isset($data['brand_created_by']) ? $data['brand_created_by'] : null;
        $this->container['brand_updated_by'] = isset($data['brand_updated_by']) ? $data['brand_updated_by'] : null;
        $this->container['brand_created_at'] = isset($data['brand_created_at']) ? $data['brand_created_at'] : null;
        $this->container['brand_updated_at'] = isset($data['brand_updated_at']) ? $data['brand_updated_at'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of brand
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tags
     * @return \BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \BumbalClient\Model\TagModel[] $tags 
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * Gets meta_data
     * @return \BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \BumbalClient\Model\MetaDataModel[] $meta_data 
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets brand_colours
     * @return \BumbalClient\Model\BrandColourModel[]
     */
    public function getBrandColours()
    {
        return $this->container['brand_colours'];
    }

    /**
     * Sets brand_colours
     * @param \BumbalClient\Model\BrandColourModel[] $brand_colours 
     * @return $this
     */
    public function setBrandColours($brand_colours)
    {
        $this->container['brand_colours'] = $brand_colours;

        return $this;
    }

    /**
     * Gets files
     * @return \BumbalClient\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \BumbalClient\Model\FileModel[] $files 
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets portal_settings
     * @return \BumbalClient\Model\PortalSettingModel[]
     */
    public function getPortalSettings()
    {
        return $this->container['portal_settings'];
    }

    /**
     * Sets portal_settings
     * @param \BumbalClient\Model\PortalSettingModel[] $portal_settings 
     * @return $this
     */
    public function setPortalSettings($portal_settings)
    {
        $this->container['portal_settings'] = $portal_settings;

        return $this;
    }

    /**
     * Gets brand_created_by
     * @return \BumbalClient\Model\UsersModel
     */
    public function getBrandCreatedBy()
    {
        return $this->container['brand_created_by'];
    }

    /**
     * Sets brand_created_by
     * @param \BumbalClient\Model\UsersModel $brand_created_by 
     * @return $this
     */
    public function setBrandCreatedBy($brand_created_by)
    {
        $this->container['brand_created_by'] = $brand_created_by;

        return $this;
    }

    /**
     * Gets brand_updated_by
     * @return \BumbalClient\Model\UsersModel
     */
    public function getBrandUpdatedBy()
    {
        return $this->container['brand_updated_by'];
    }

    /**
     * Sets brand_updated_by
     * @param \BumbalClient\Model\UsersModel $brand_updated_by 
     * @return $this
     */
    public function setBrandUpdatedBy($brand_updated_by)
    {
        $this->container['brand_updated_by'] = $brand_updated_by;

        return $this;
    }

    /**
     * Gets brand_created_at
     * @return \DateTime
     */
    public function getBrandCreatedAt()
    {
        return $this->container['brand_created_at'];
    }

    /**
     * Sets brand_created_at
     * @param \DateTime $brand_created_at created_at date time
     * @return $this
     */
    public function setBrandCreatedAt($brand_created_at)
    {
        $this->container['brand_created_at'] = $brand_created_at;

        return $this;
    }

    /**
     * Gets brand_updated_at
     * @return \DateTime
     */
    public function getBrandUpdatedAt()
    {
        return $this->container['brand_updated_at'];
    }

    /**
     * Sets brand_updated_at
     * @param \DateTime $brand_updated_at updated_at date time
     * @return $this
     */
    public function setBrandUpdatedAt($brand_updated_at)
    {
        $this->container['brand_updated_at'] = $brand_updated_at;

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


