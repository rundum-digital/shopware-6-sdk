<?php
/**
 * ThemeFlat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Rundum\Shopware6\Model;

use \ArrayAccess;
use \Rundum\Shopware6\ObjectSerializer;

/**
 * ThemeFlat Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThemeFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'theme_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'technical_name' => 'string',
'name' => 'string',
'author' => 'string',
'description' => 'string',
'labels' => 'object',
'help_texts' => 'object',
'custom_fields' => 'object',
'preview_media_id' => 'string',
'parent_theme_id' => 'string',
'base_config' => 'object',
'config_values' => 'object',
'active' => 'bool',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'sales_channels' => '\Rundum\Shopware6\Model\SalesChannelFlat',
'media' => '\Rundum\Shopware6\Model\MediaFlat',
'preview_media' => '\Rundum\Shopware6\Model\MediaFlat',
'child_themes' => '\Rundum\Shopware6\Model\ThemeFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'technical_name' => null,
'name' => null,
'author' => null,
'description' => null,
'labels' => null,
'help_texts' => null,
'custom_fields' => null,
'preview_media_id' => 'uuid',
'parent_theme_id' => 'uuid',
'base_config' => null,
'config_values' => null,
'active' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'sales_channels' => null,
'media' => null,
'preview_media' => null,
'child_themes' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'technical_name' => 'technicalName',
'name' => 'name',
'author' => 'author',
'description' => 'description',
'labels' => 'labels',
'help_texts' => 'helpTexts',
'custom_fields' => 'customFields',
'preview_media_id' => 'previewMediaId',
'parent_theme_id' => 'parentThemeId',
'base_config' => 'baseConfig',
'config_values' => 'configValues',
'active' => 'active',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'sales_channels' => 'salesChannels',
'media' => 'media',
'preview_media' => 'previewMedia',
'child_themes' => 'childThemes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'technical_name' => 'setTechnicalName',
'name' => 'setName',
'author' => 'setAuthor',
'description' => 'setDescription',
'labels' => 'setLabels',
'help_texts' => 'setHelpTexts',
'custom_fields' => 'setCustomFields',
'preview_media_id' => 'setPreviewMediaId',
'parent_theme_id' => 'setParentThemeId',
'base_config' => 'setBaseConfig',
'config_values' => 'setConfigValues',
'active' => 'setActive',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'sales_channels' => 'setSalesChannels',
'media' => 'setMedia',
'preview_media' => 'setPreviewMedia',
'child_themes' => 'setChildThemes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'technical_name' => 'getTechnicalName',
'name' => 'getName',
'author' => 'getAuthor',
'description' => 'getDescription',
'labels' => 'getLabels',
'help_texts' => 'getHelpTexts',
'custom_fields' => 'getCustomFields',
'preview_media_id' => 'getPreviewMediaId',
'parent_theme_id' => 'getParentThemeId',
'base_config' => 'getBaseConfig',
'config_values' => 'getConfigValues',
'active' => 'getActive',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'sales_channels' => 'getSalesChannels',
'media' => 'getMedia',
'preview_media' => 'getPreviewMedia',
'child_themes' => 'getChildThemes'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['technical_name'] = isset($data['technical_name']) ? $data['technical_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['help_texts'] = isset($data['help_texts']) ? $data['help_texts'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['preview_media_id'] = isset($data['preview_media_id']) ? $data['preview_media_id'] : null;
        $this->container['parent_theme_id'] = isset($data['parent_theme_id']) ? $data['parent_theme_id'] : null;
        $this->container['base_config'] = isset($data['base_config']) ? $data['base_config'] : null;
        $this->container['config_values'] = isset($data['config_values']) ? $data['config_values'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['preview_media'] = isset($data['preview_media']) ? $data['preview_media'] : null;
        $this->container['child_themes'] = isset($data['child_themes']) ? $data['child_themes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets technical_name
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string $technical_name technical_name
     *
     * @return $this
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return object
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param object $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets help_texts
     *
     * @return object
     */
    public function getHelpTexts()
    {
        return $this->container['help_texts'];
    }

    /**
     * Sets help_texts
     *
     * @param object $help_texts help_texts
     *
     * @return $this
     */
    public function setHelpTexts($help_texts)
    {
        $this->container['help_texts'] = $help_texts;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets preview_media_id
     *
     * @return string
     */
    public function getPreviewMediaId()
    {
        return $this->container['preview_media_id'];
    }

    /**
     * Sets preview_media_id
     *
     * @param string $preview_media_id preview_media_id
     *
     * @return $this
     */
    public function setPreviewMediaId($preview_media_id)
    {
        $this->container['preview_media_id'] = $preview_media_id;

        return $this;
    }

    /**
     * Gets parent_theme_id
     *
     * @return string
     */
    public function getParentThemeId()
    {
        return $this->container['parent_theme_id'];
    }

    /**
     * Sets parent_theme_id
     *
     * @param string $parent_theme_id parent_theme_id
     *
     * @return $this
     */
    public function setParentThemeId($parent_theme_id)
    {
        $this->container['parent_theme_id'] = $parent_theme_id;

        return $this;
    }

    /**
     * Gets base_config
     *
     * @return object
     */
    public function getBaseConfig()
    {
        return $this->container['base_config'];
    }

    /**
     * Sets base_config
     *
     * @param object $base_config base_config
     *
     * @return $this
     */
    public function setBaseConfig($base_config)
    {
        $this->container['base_config'] = $base_config;

        return $this;
    }

    /**
     * Gets config_values
     *
     * @return object
     */
    public function getConfigValues()
    {
        return $this->container['config_values'];
    }

    /**
     * Sets config_values
     *
     * @param object $config_values config_values
     *
     * @return $this
     */
    public function setConfigValues($config_values)
    {
        $this->container['config_values'] = $config_values;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Rundum\Shopware6\Model\SalesChannelFlat
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Rundum\Shopware6\Model\SalesChannelFlat $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Rundum\Shopware6\Model\MediaFlat
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Rundum\Shopware6\Model\MediaFlat $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets preview_media
     *
     * @return \Rundum\Shopware6\Model\MediaFlat
     */
    public function getPreviewMedia()
    {
        return $this->container['preview_media'];
    }

    /**
     * Sets preview_media
     *
     * @param \Rundum\Shopware6\Model\MediaFlat $preview_media preview_media
     *
     * @return $this
     */
    public function setPreviewMedia($preview_media)
    {
        $this->container['preview_media'] = $preview_media;

        return $this;
    }

    /**
     * Gets child_themes
     *
     * @return \Rundum\Shopware6\Model\ThemeFlat
     */
    public function getChildThemes()
    {
        return $this->container['child_themes'];
    }

    /**
     * Sets child_themes
     *
     * @param \Rundum\Shopware6\Model\ThemeFlat $child_themes child_themes
     *
     * @return $this
     */
    public function setChildThemes($child_themes)
    {
        $this->container['child_themes'] = $child_themes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
