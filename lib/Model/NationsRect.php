<?php
/**
 * NationsRect
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WebAPI
 *
 * Access Sponge powered Minecraft servers through a WebAPI  # Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/...  As a quick test try reaching the route http:/localhost:8080/api/info (remember that you can only access \"localhost\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  # Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
 *
 * OpenAPI spec version: <version>
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * NationsRect Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NationsRect implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NationsRect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'world' => '\Swagger\Client\Model\World',
        'min_x' => 'float',
        'min_y' => 'float',
        'max_x' => 'float',
        'max_y' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'world' => null,
        'min_x' => 'integer',
        'min_y' => 'integer',
        'max_x' => 'integer',
        'max_y' => 'integer'
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
        'world' => 'world',
        'min_x' => 'minX',
        'min_y' => 'minY',
        'max_x' => 'maxX',
        'max_y' => 'maxY'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'world' => 'setWorld',
        'min_x' => 'setMinX',
        'min_y' => 'setMinY',
        'max_x' => 'setMaxX',
        'max_y' => 'setMaxY'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'world' => 'getWorld',
        'min_x' => 'getMinX',
        'min_y' => 'getMinY',
        'max_x' => 'getMaxX',
        'max_y' => 'getMaxY'
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
        $this->container['world'] = isset($data['world']) ? $data['world'] : null;
        $this->container['min_x'] = isset($data['min_x']) ? $data['min_x'] : null;
        $this->container['min_y'] = isset($data['min_y']) ? $data['min_y'] : null;
        $this->container['max_x'] = isset($data['max_x']) ? $data['max_x'] : null;
        $this->container['max_y'] = isset($data['max_y']) ? $data['max_y'] : null;
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
     * Gets world
     * @return \Swagger\Client\Model\World
     */
    public function getWorld()
    {
        return $this->container['world'];
    }

    /**
     * Sets world
     * @param \Swagger\Client\Model\World $world
     * @return $this
     */
    public function setWorld($world)
    {
        $this->container['world'] = $world;

        return $this;
    }

    /**
     * Gets min_x
     * @return float
     */
    public function getMinX()
    {
        return $this->container['min_x'];
    }

    /**
     * Sets min_x
     * @param float $min_x The minimum x coordinate of this rect.
     * @return $this
     */
    public function setMinX($min_x)
    {
        $this->container['min_x'] = $min_x;

        return $this;
    }

    /**
     * Gets min_y
     * @return float
     */
    public function getMinY()
    {
        return $this->container['min_y'];
    }

    /**
     * Sets min_y
     * @param float $min_y The minimum y coordinate of this rect.
     * @return $this
     */
    public function setMinY($min_y)
    {
        $this->container['min_y'] = $min_y;

        return $this;
    }

    /**
     * Gets max_x
     * @return float
     */
    public function getMaxX()
    {
        return $this->container['max_x'];
    }

    /**
     * Sets max_x
     * @param float $max_x The maximum x coordinate of this rect.
     * @return $this
     */
    public function setMaxX($max_x)
    {
        $this->container['max_x'] = $max_x;

        return $this;
    }

    /**
     * Gets max_y
     * @return float
     */
    public function getMaxY()
    {
        return $this->container['max_y'];
    }

    /**
     * Sets max_y
     * @param float $max_y The maximum y coordinate of this rect.
     * @return $this
     */
    public function setMaxY($max_y)
    {
        $this->container['max_y'] = $max_y;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

