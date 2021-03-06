<?php
/**
 * MediaRelationships
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
 * MediaRelationships Class Doc Comment
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'media_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tags' => '\Rundum\Shopware6\Model\MediaRelationshipsTags',
'thumbnails' => '\Rundum\Shopware6\Model\MediaRelationshipsThumbnails',
'user' => '\Rundum\Shopware6\Model\MediaRelationshipsUser',
'categories' => '\Rundum\Shopware6\Model\MediaRelationshipsCategories',
'product_manufacturers' => '\Rundum\Shopware6\Model\MediaRelationshipsProductManufacturers',
'product_media' => '\Rundum\Shopware6\Model\MediaRelationshipsProductMedia',
'avatar_user' => '\Rundum\Shopware6\Model\MediaRelationshipsAvatarUser',
'media_folder' => '\Rundum\Shopware6\Model\MediaRelationshipsMediaFolder',
'property_group_options' => '\Rundum\Shopware6\Model\MediaRelationshipsPropertyGroupOptions',
'mail_template_media' => '\Rundum\Shopware6\Model\MediaRelationshipsMailTemplateMedia',
'document_base_configs' => '\Rundum\Shopware6\Model\MediaRelationshipsDocumentBaseConfigs',
'shipping_methods' => '\Rundum\Shopware6\Model\MediaRelationshipsShippingMethods',
'payment_methods' => '\Rundum\Shopware6\Model\MediaRelationshipsPaymentMethods',
'product_configurator_settings' => '\Rundum\Shopware6\Model\MediaRelationshipsProductConfiguratorSettings',
'order_line_items' => '\Rundum\Shopware6\Model\MediaRelationshipsOrderLineItems',
'cms_blocks' => '\Rundum\Shopware6\Model\MediaRelationshipsCmsBlocks',
'cms_sections' => '\Rundum\Shopware6\Model\MediaRelationshipsCmsSections',
'cms_pages' => '\Rundum\Shopware6\Model\MediaRelationshipsCmsPages',
'documents' => '\Rundum\Shopware6\Model\MediaRelationshipsDocuments'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tags' => null,
'thumbnails' => null,
'user' => null,
'categories' => null,
'product_manufacturers' => null,
'product_media' => null,
'avatar_user' => null,
'media_folder' => null,
'property_group_options' => null,
'mail_template_media' => null,
'document_base_configs' => null,
'shipping_methods' => null,
'payment_methods' => null,
'product_configurator_settings' => null,
'order_line_items' => null,
'cms_blocks' => null,
'cms_sections' => null,
'cms_pages' => null,
'documents' => null    ];

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
        'tags' => 'tags',
'thumbnails' => 'thumbnails',
'user' => 'user',
'categories' => 'categories',
'product_manufacturers' => 'productManufacturers',
'product_media' => 'productMedia',
'avatar_user' => 'avatarUser',
'media_folder' => 'mediaFolder',
'property_group_options' => 'propertyGroupOptions',
'mail_template_media' => 'mailTemplateMedia',
'document_base_configs' => 'documentBaseConfigs',
'shipping_methods' => 'shippingMethods',
'payment_methods' => 'paymentMethods',
'product_configurator_settings' => 'productConfiguratorSettings',
'order_line_items' => 'orderLineItems',
'cms_blocks' => 'cmsBlocks',
'cms_sections' => 'cmsSections',
'cms_pages' => 'cmsPages',
'documents' => 'documents'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
'thumbnails' => 'setThumbnails',
'user' => 'setUser',
'categories' => 'setCategories',
'product_manufacturers' => 'setProductManufacturers',
'product_media' => 'setProductMedia',
'avatar_user' => 'setAvatarUser',
'media_folder' => 'setMediaFolder',
'property_group_options' => 'setPropertyGroupOptions',
'mail_template_media' => 'setMailTemplateMedia',
'document_base_configs' => 'setDocumentBaseConfigs',
'shipping_methods' => 'setShippingMethods',
'payment_methods' => 'setPaymentMethods',
'product_configurator_settings' => 'setProductConfiguratorSettings',
'order_line_items' => 'setOrderLineItems',
'cms_blocks' => 'setCmsBlocks',
'cms_sections' => 'setCmsSections',
'cms_pages' => 'setCmsPages',
'documents' => 'setDocuments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
'thumbnails' => 'getThumbnails',
'user' => 'getUser',
'categories' => 'getCategories',
'product_manufacturers' => 'getProductManufacturers',
'product_media' => 'getProductMedia',
'avatar_user' => 'getAvatarUser',
'media_folder' => 'getMediaFolder',
'property_group_options' => 'getPropertyGroupOptions',
'mail_template_media' => 'getMailTemplateMedia',
'document_base_configs' => 'getDocumentBaseConfigs',
'shipping_methods' => 'getShippingMethods',
'payment_methods' => 'getPaymentMethods',
'product_configurator_settings' => 'getProductConfiguratorSettings',
'order_line_items' => 'getOrderLineItems',
'cms_blocks' => 'getCmsBlocks',
'cms_sections' => 'getCmsSections',
'cms_pages' => 'getCmsPages',
'documents' => 'getDocuments'    ];

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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['thumbnails'] = isset($data['thumbnails']) ? $data['thumbnails'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['product_manufacturers'] = isset($data['product_manufacturers']) ? $data['product_manufacturers'] : null;
        $this->container['product_media'] = isset($data['product_media']) ? $data['product_media'] : null;
        $this->container['avatar_user'] = isset($data['avatar_user']) ? $data['avatar_user'] : null;
        $this->container['media_folder'] = isset($data['media_folder']) ? $data['media_folder'] : null;
        $this->container['property_group_options'] = isset($data['property_group_options']) ? $data['property_group_options'] : null;
        $this->container['mail_template_media'] = isset($data['mail_template_media']) ? $data['mail_template_media'] : null;
        $this->container['document_base_configs'] = isset($data['document_base_configs']) ? $data['document_base_configs'] : null;
        $this->container['shipping_methods'] = isset($data['shipping_methods']) ? $data['shipping_methods'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['product_configurator_settings'] = isset($data['product_configurator_settings']) ? $data['product_configurator_settings'] : null;
        $this->container['order_line_items'] = isset($data['order_line_items']) ? $data['order_line_items'] : null;
        $this->container['cms_blocks'] = isset($data['cms_blocks']) ? $data['cms_blocks'] : null;
        $this->container['cms_sections'] = isset($data['cms_sections']) ? $data['cms_sections'] : null;
        $this->container['cms_pages'] = isset($data['cms_pages']) ? $data['cms_pages'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
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
     * Gets tags
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets thumbnails
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsThumbnails
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsThumbnails $thumbnails thumbnails
     *
     * @return $this
     */
    public function setThumbnails($thumbnails)
    {
        $this->container['thumbnails'] = $thumbnails;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsUser $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsCategories
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsCategories $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets product_manufacturers
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsProductManufacturers
     */
    public function getProductManufacturers()
    {
        return $this->container['product_manufacturers'];
    }

    /**
     * Sets product_manufacturers
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsProductManufacturers $product_manufacturers product_manufacturers
     *
     * @return $this
     */
    public function setProductManufacturers($product_manufacturers)
    {
        $this->container['product_manufacturers'] = $product_manufacturers;

        return $this;
    }

    /**
     * Gets product_media
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsProductMedia
     */
    public function getProductMedia()
    {
        return $this->container['product_media'];
    }

    /**
     * Sets product_media
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsProductMedia $product_media product_media
     *
     * @return $this
     */
    public function setProductMedia($product_media)
    {
        $this->container['product_media'] = $product_media;

        return $this;
    }

    /**
     * Gets avatar_user
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsAvatarUser
     */
    public function getAvatarUser()
    {
        return $this->container['avatar_user'];
    }

    /**
     * Sets avatar_user
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsAvatarUser $avatar_user avatar_user
     *
     * @return $this
     */
    public function setAvatarUser($avatar_user)
    {
        $this->container['avatar_user'] = $avatar_user;

        return $this;
    }

    /**
     * Gets media_folder
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsMediaFolder
     */
    public function getMediaFolder()
    {
        return $this->container['media_folder'];
    }

    /**
     * Sets media_folder
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsMediaFolder $media_folder media_folder
     *
     * @return $this
     */
    public function setMediaFolder($media_folder)
    {
        $this->container['media_folder'] = $media_folder;

        return $this;
    }

    /**
     * Gets property_group_options
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsPropertyGroupOptions
     */
    public function getPropertyGroupOptions()
    {
        return $this->container['property_group_options'];
    }

    /**
     * Sets property_group_options
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsPropertyGroupOptions $property_group_options property_group_options
     *
     * @return $this
     */
    public function setPropertyGroupOptions($property_group_options)
    {
        $this->container['property_group_options'] = $property_group_options;

        return $this;
    }

    /**
     * Gets mail_template_media
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsMailTemplateMedia
     */
    public function getMailTemplateMedia()
    {
        return $this->container['mail_template_media'];
    }

    /**
     * Sets mail_template_media
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsMailTemplateMedia $mail_template_media mail_template_media
     *
     * @return $this
     */
    public function setMailTemplateMedia($mail_template_media)
    {
        $this->container['mail_template_media'] = $mail_template_media;

        return $this;
    }

    /**
     * Gets document_base_configs
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsDocumentBaseConfigs
     */
    public function getDocumentBaseConfigs()
    {
        return $this->container['document_base_configs'];
    }

    /**
     * Sets document_base_configs
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsDocumentBaseConfigs $document_base_configs document_base_configs
     *
     * @return $this
     */
    public function setDocumentBaseConfigs($document_base_configs)
    {
        $this->container['document_base_configs'] = $document_base_configs;

        return $this;
    }

    /**
     * Gets shipping_methods
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsShippingMethods
     */
    public function getShippingMethods()
    {
        return $this->container['shipping_methods'];
    }

    /**
     * Sets shipping_methods
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsShippingMethods $shipping_methods shipping_methods
     *
     * @return $this
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->container['shipping_methods'] = $shipping_methods;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsPaymentMethods
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsPaymentMethods $payment_methods payment_methods
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets product_configurator_settings
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsProductConfiguratorSettings
     */
    public function getProductConfiguratorSettings()
    {
        return $this->container['product_configurator_settings'];
    }

    /**
     * Sets product_configurator_settings
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsProductConfiguratorSettings $product_configurator_settings product_configurator_settings
     *
     * @return $this
     */
    public function setProductConfiguratorSettings($product_configurator_settings)
    {
        $this->container['product_configurator_settings'] = $product_configurator_settings;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsOrderLineItems
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsOrderLineItems $order_line_items order_line_items
     *
     * @return $this
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

        return $this;
    }

    /**
     * Gets cms_blocks
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsCmsBlocks
     */
    public function getCmsBlocks()
    {
        return $this->container['cms_blocks'];
    }

    /**
     * Sets cms_blocks
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsCmsBlocks $cms_blocks cms_blocks
     *
     * @return $this
     */
    public function setCmsBlocks($cms_blocks)
    {
        $this->container['cms_blocks'] = $cms_blocks;

        return $this;
    }

    /**
     * Gets cms_sections
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsCmsSections
     */
    public function getCmsSections()
    {
        return $this->container['cms_sections'];
    }

    /**
     * Sets cms_sections
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsCmsSections $cms_sections cms_sections
     *
     * @return $this
     */
    public function setCmsSections($cms_sections)
    {
        $this->container['cms_sections'] = $cms_sections;

        return $this;
    }

    /**
     * Gets cms_pages
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsCmsPages
     */
    public function getCmsPages()
    {
        return $this->container['cms_pages'];
    }

    /**
     * Sets cms_pages
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsCmsPages $cms_pages cms_pages
     *
     * @return $this
     */
    public function setCmsPages($cms_pages)
    {
        $this->container['cms_pages'] = $cms_pages;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Rundum\Shopware6\Model\MediaRelationshipsDocuments
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Rundum\Shopware6\Model\MediaRelationshipsDocuments $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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
