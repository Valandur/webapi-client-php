<?php
/**
 * CreateWorldRequestTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * CreateWorldRequestTest Class Doc Comment
 *
 * @category    Class */
// * @description CreateWorldRequest
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateWorldRequestTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CreateWorldRequest"
     */
    public function testCreateWorldRequest()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "seed"
     */
    public function testPropertySeed()
    {
    }

    /**
     * Test attribute "generator"
     */
    public function testPropertyGenerator()
    {
    }

    /**
     * Test attribute "game_mode"
     */
    public function testPropertyGameMode()
    {
    }

    /**
     * Test attribute "difficulty"
     */
    public function testPropertyDifficulty()
    {
    }

    /**
     * Test attribute "load_on_startup"
     */
    public function testPropertyLoadOnStartup()
    {
    }

    /**
     * Test attribute "keep_spawn_loaded"
     */
    public function testPropertyKeepSpawnLoaded()
    {
    }

    /**
     * Test attribute "allow_commands"
     */
    public function testPropertyAllowCommands()
    {
    }

    /**
     * Test attribute "uses_map_features"
     */
    public function testPropertyUsesMapFeatures()
    {
    }

    /**
     * Test attribute "dimension"
     */
    public function testPropertyDimension()
    {
    }

    /**
     * Test attribute "generate_bonus_chest"
     */
    public function testPropertyGenerateBonusChest()
    {
    }
}
