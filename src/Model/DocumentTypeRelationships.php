<?php
/**
 * DocumentTypeRelationships
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
 * DocumentTypeRelationships Class Doc Comment
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentTypeRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'document_type_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'documents' => '\Rundum\Shopware6\Model\DocumentTypeRelationshipsDocuments',
'document_base_configs' => '\Rundum\Shopware6\Model\DocumentTypeRelationshipsDocumentBaseConfigs',
'document_base_config_sales_channels' => '\Rundum\Shopware6\Model\DocumentTypeRelationshipsDocumentBaseConfigSalesChannels'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'documents' => null,
'document_base_configs' => null,
'document_base_config_sales_channels' => null    ];

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
        'documents' => 'documents',
'document_base_configs' => 'documentBaseConfigs',
'document_base_config_sales_channels' => 'documentBaseConfigSalesChannels'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documents' => 'setDocuments',
'document_base_configs' => 'setDocumentBaseConfigs',
'document_base_config_sales_channels' => 'setDocumentBaseConfigSalesChannels'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documents' => 'getDocuments',
'document_base_configs' => 'getDocumentBaseConfigs',
'document_base_config_sales_channels' => 'getDocumentBaseConfigSalesChannels'    ];

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
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['document_base_configs'] = isset($data['document_base_configs']) ? $data['document_base_configs'] : null;
        $this->container['document_base_config_sales_channels'] = isset($data['document_base_config_sales_channels']) ? $data['document_base_config_sales_channels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets documents
     *
     * @return \Rundum\Shopware6\Model\DocumentTypeRelationshipsDocuments
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Rundum\Shopware6\Model\DocumentTypeRelationshipsDocuments $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets document_base_configs
     *
     * @return \Rundum\Shopware6\Model\DocumentTypeRelationshipsDocumentBaseConfigs
     */
    public function getDocumentBaseConfigs()
    {
        return $this->container['document_base_configs'];
    }

    /**
     * Sets document_base_configs
     *
     * @param \Rundum\Shopware6\Model\DocumentTypeRelationshipsDocumentBaseConfigs $document_base_configs document_base_configs
     *
     * @return $this
     */
    public function setDocumentBaseConfigs($document_base_configs)
    {
        $this->container['document_base_configs'] = $document_base_configs;

        return $this;
    }

    /**
     * Gets document_base_config_sales_channels
     *
     * @return \Rundum\Shopware6\Model\DocumentTypeRelationshipsDocumentBaseConfigSalesChannels
     */
    public function getDocumentBaseConfigSalesChannels()
    {
        return $this->container['document_base_config_sales_channels'];
    }

    /**
     * Sets document_base_config_sales_channels
     *
     * @param \Rundum\Shopware6\Model\DocumentTypeRelationshipsDocumentBaseConfigSalesChannels $document_base_config_sales_channels document_base_config_sales_channels
     *
     * @return $this
     */
    public function setDocumentBaseConfigSalesChannels($document_base_config_sales_channels)
    {
        $this->container['document_base_config_sales_channels'] = $document_base_config_sales_channels;

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
