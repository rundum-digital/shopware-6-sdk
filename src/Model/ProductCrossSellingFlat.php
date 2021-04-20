<?php
/**
 * ProductCrossSellingFlat
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
 * ProductCrossSellingFlat Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.1.0.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductCrossSellingFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_cross_selling_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'position' => 'int',
'sort_by' => 'string',
'sort_direction' => 'string',
'type' => 'string',
'active' => 'bool',
'limit' => 'int',
'product_id' => 'string',
'product_version_id' => 'string',
'product_stream_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'product' => '\Rundum\Shopware6\Model\ProductFlat',
'product_stream' => '\Rundum\Shopware6\Model\ProductStreamFlat',
'assigned_products' => '\Rundum\Shopware6\Model\ProductCrossSellingAssignedProductsFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'name' => null,
'position' => 'int64',
'sort_by' => null,
'sort_direction' => null,
'type' => null,
'active' => null,
'limit' => 'int64',
'product_id' => 'uuid',
'product_version_id' => 'uuid',
'product_stream_id' => 'uuid',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'product' => null,
'product_stream' => null,
'assigned_products' => null    ];

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
'name' => 'name',
'position' => 'position',
'sort_by' => 'sortBy',
'sort_direction' => 'sortDirection',
'type' => 'type',
'active' => 'active',
'limit' => 'limit',
'product_id' => 'productId',
'product_version_id' => 'productVersionId',
'product_stream_id' => 'productStreamId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'product' => 'product',
'product_stream' => 'productStream',
'assigned_products' => 'assignedProducts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'position' => 'setPosition',
'sort_by' => 'setSortBy',
'sort_direction' => 'setSortDirection',
'type' => 'setType',
'active' => 'setActive',
'limit' => 'setLimit',
'product_id' => 'setProductId',
'product_version_id' => 'setProductVersionId',
'product_stream_id' => 'setProductStreamId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'product' => 'setProduct',
'product_stream' => 'setProductStream',
'assigned_products' => 'setAssignedProducts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'position' => 'getPosition',
'sort_by' => 'getSortBy',
'sort_direction' => 'getSortDirection',
'type' => 'getType',
'active' => 'getActive',
'limit' => 'getLimit',
'product_id' => 'getProductId',
'product_version_id' => 'getProductVersionId',
'product_stream_id' => 'getProductStreamId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'product' => 'getProduct',
'product_stream' => 'getProductStream',
'assigned_products' => 'getAssignedProducts'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['sort_by'] = isset($data['sort_by']) ? $data['sort_by'] : null;
        $this->container['sort_direction'] = isset($data['sort_direction']) ? $data['sort_direction'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_version_id'] = isset($data['product_version_id']) ? $data['product_version_id'] : null;
        $this->container['product_stream_id'] = isset($data['product_stream_id']) ? $data['product_stream_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['product_stream'] = isset($data['product_stream']) ? $data['product_stream'] : null;
        $this->container['assigned_products'] = isset($data['assigned_products']) ? $data['assigned_products'] : null;
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
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
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
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return string
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param string $sort_by sort_by
     *
     * @return $this
     */
    public function setSortBy($sort_by)
    {
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets sort_direction
     *
     * @return string
     */
    public function getSortDirection()
    {
        return $this->container['sort_direction'];
    }

    /**
     * Sets sort_direction
     *
     * @param string $sort_direction sort_direction
     *
     * @return $this
     */
    public function setSortDirection($sort_direction)
    {
        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_version_id
     *
     * @return string
     */
    public function getProductVersionId()
    {
        return $this->container['product_version_id'];
    }

    /**
     * Sets product_version_id
     *
     * @param string $product_version_id product_version_id
     *
     * @return $this
     */
    public function setProductVersionId($product_version_id)
    {
        $this->container['product_version_id'] = $product_version_id;

        return $this;
    }

    /**
     * Gets product_stream_id
     *
     * @return string
     */
    public function getProductStreamId()
    {
        return $this->container['product_stream_id'];
    }

    /**
     * Sets product_stream_id
     *
     * @param string $product_stream_id product_stream_id
     *
     * @return $this
     */
    public function setProductStreamId($product_stream_id)
    {
        $this->container['product_stream_id'] = $product_stream_id;

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
     * Gets product
     *
     * @return \Rundum\Shopware6\Model\ProductFlat
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Rundum\Shopware6\Model\ProductFlat $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets product_stream
     *
     * @return \Rundum\Shopware6\Model\ProductStreamFlat
     */
    public function getProductStream()
    {
        return $this->container['product_stream'];
    }

    /**
     * Sets product_stream
     *
     * @param \Rundum\Shopware6\Model\ProductStreamFlat $product_stream product_stream
     *
     * @return $this
     */
    public function setProductStream($product_stream)
    {
        $this->container['product_stream'] = $product_stream;

        return $this;
    }

    /**
     * Gets assigned_products
     *
     * @return \Rundum\Shopware6\Model\ProductCrossSellingAssignedProductsFlat
     */
    public function getAssignedProducts()
    {
        return $this->container['assigned_products'];
    }

    /**
     * Sets assigned_products
     *
     * @param \Rundum\Shopware6\Model\ProductCrossSellingAssignedProductsFlat $assigned_products assigned_products
     *
     * @return $this
     */
    public function setAssignedProducts($assigned_products)
    {
        $this->container['assigned_products'] = $assigned_products;

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
