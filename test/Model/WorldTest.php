<?php
/**
 * WorldTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web-API
 *
 * Access Sponge powered Minecraft servers through a WebAPI  # Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/v5...  As a quick test try reaching the route http:/localhost:8080/api/v5/info (remember that you can only access \\\"localhost\\\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  # List endpoints Lots of objects offer an endpoint to list all objects (e.g. `GET: /world` to get all worlds). These endpoints return only the properties marked 'required' by default, because the list might be quite large. If you want to return ALL data for a list endpoint add the query parameter `details`, (e.g. `GET: /world?details`).  > Remember that in this case the data returned by the endpoint might be quite large.  # Debugging endpoints Apart from the `?details` flag you can also pass some other flags for debugging purposes. Remember that you must include the first query parameter with `?`, and further ones with `&`:  `details`: Includes details for list endpoints  `accept=[json/xml]`: Manually set the accept content type. This is good for browser testing, **BUT DON'T USE THIS IN PRODUCTION, YOU CAN SUPPLY THE `Accepts` HEADER FOR THAT**  `pretty`: Pretty prints the data, also good for debugging in the browser.  An example request might look like this: `http://localhost:8080/api/v5/world?details&accpet=json&pretty&key=MY-API-KEY`  # Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
 *
 * OpenAPI spec version: 5.4.2-S7.1.0
 * Contact: inithilian@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.7
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * WorldTest Class Doc Comment
 *
 * @category    Class
 * @description World
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WorldTest extends \PHPUnit_Framework_TestCase
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
     * Test "World"
     */
    public function testWorld()
    {
    }

    /**
     * Test attribute "allow_commands"
     */
    public function testPropertyAllowCommands()
    {
    }

    /**
     * Test attribute "border"
     */
    public function testPropertyBorder()
    {
    }

    /**
     * Test attribute "difficulty"
     */
    public function testPropertyDifficulty()
    {
    }

    /**
     * Test attribute "dimension_type"
     */
    public function testPropertyDimensionType()
    {
    }

    /**
     * Test attribute "game_mode"
     */
    public function testPropertyGameMode()
    {
    }

    /**
     * Test attribute "game_rules"
     */
    public function testPropertyGameRules()
    {
    }

    /**
     * Test attribute "generate_bonus_chests"
     */
    public function testPropertyGenerateBonusChests()
    {
    }

    /**
     * Test attribute "generator_type"
     */
    public function testPropertyGeneratorType()
    {
    }

    /**
     * Test attribute "keep_spawn_loaded"
     */
    public function testPropertyKeepSpawnLoaded()
    {
    }

    /**
     * Test attribute "link"
     */
    public function testPropertyLink()
    {
    }

    /**
     * Test attribute "load_on_startup"
     */
    public function testPropertyLoadOnStartup()
    {
    }

    /**
     * Test attribute "loaded"
     */
    public function testPropertyLoaded()
    {
    }

    /**
     * Test attribute "map_features_enabled"
     */
    public function testPropertyMapFeaturesEnabled()
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
     * Test attribute "spawn"
     */
    public function testPropertySpawn()
    {
    }

    /**
     * Test attribute "time"
     */
    public function testPropertyTime()
    {
    }

    /**
     * Test attribute "uuid"
     */
    public function testPropertyUuid()
    {
    }

    /**
     * Test attribute "weather"
     */
    public function testPropertyWeather()
    {
    }

    /**
     * Test attribute "absorption"
     */
    public function testPropertyAbsorption()
    {
    }

    /**
     * Test attribute "age"
     */
    public function testPropertyAge()
    {
    }

    /**
     * Test attribute "aggressive"
     */
    public function testPropertyAggressive()
    {
    }

    /**
     * Test attribute "ai_enabled"
     */
    public function testPropertyAiEnabled()
    {
    }

    /**
     * Test attribute "anger_level"
     */
    public function testPropertyAngerLevel()
    {
    }

    /**
     * Test attribute "armor_stand"
     */
    public function testPropertyArmorStand()
    {
    }

    /**
     * Test attribute "art"
     */
    public function testPropertyArt()
    {
    }

    /**
     * Test attribute "attached"
     */
    public function testPropertyAttached()
    {
    }

    /**
     * Test attribute "author"
     */
    public function testPropertyAuthor()
    {
    }

    /**
     * Test attribute "axis"
     */
    public function testPropertyAxis()
    {
    }

    /**
     * Test attribute "banner"
     */
    public function testPropertyBanner()
    {
    }

    /**
     * Test attribute "beacon"
     */
    public function testPropertyBeacon()
    {
    }

    /**
     * Test attribute "big_mushroom"
     */
    public function testPropertyBigMushroom()
    {
    }

    /**
     * Test attribute "block"
     */
    public function testPropertyBlock()
    {
    }

    /**
     * Test attribute "breathing"
     */
    public function testPropertyBreathing()
    {
    }

    /**
     * Test attribute "breedable"
     */
    public function testPropertyBreedable()
    {
    }

    /**
     * Test attribute "brewing_stand"
     */
    public function testPropertyBrewingStand()
    {
    }

    /**
     * Test attribute "brick"
     */
    public function testPropertyBrick()
    {
    }

    /**
     * Test attribute "career"
     */
    public function testPropertyCareer()
    {
    }

    /**
     * Test attribute "charged"
     */
    public function testPropertyCharged()
    {
    }

    /**
     * Test attribute "coal"
     */
    public function testPropertyCoal()
    {
    }

    /**
     * Test attribute "color"
     */
    public function testPropertyColor()
    {
    }

    /**
     * Test attribute "command"
     */
    public function testPropertyCommand()
    {
    }

    /**
     * Test attribute "comparator"
     */
    public function testPropertyComparator()
    {
    }

    /**
     * Test attribute "connected_direction"
     */
    public function testPropertyConnectedDirection()
    {
    }

    /**
     * Test attribute "cooked_fish"
     */
    public function testPropertyCookedFish()
    {
    }

    /**
     * Test attribute "cooldown"
     */
    public function testPropertyCooldown()
    {
    }

    /**
     * Test attribute "critical_hit"
     */
    public function testPropertyCriticalHit()
    {
    }

    /**
     * Test attribute "custom_name"
     */
    public function testPropertyCustomName()
    {
    }

    /**
     * Test attribute "damage"
     */
    public function testPropertyDamage()
    {
    }

    /**
     * Test attribute "damageable"
     */
    public function testPropertyDamageable()
    {
    }

    /**
     * Test attribute "decayable"
     */
    public function testPropertyDecayable()
    {
    }

    /**
     * Test attribute "delay"
     */
    public function testPropertyDelay()
    {
    }

    /**
     * Test attribute "despawn_delay"
     */
    public function testPropertyDespawnDelay()
    {
    }

    /**
     * Test attribute "direction"
     */
    public function testPropertyDirection()
    {
    }

    /**
     * Test attribute "dirt"
     */
    public function testPropertyDirt()
    {
    }

    /**
     * Test attribute "disarmed"
     */
    public function testPropertyDisarmed()
    {
    }

    /**
     * Test attribute "disguised_block"
     */
    public function testPropertyDisguisedBlock()
    {
    }

    /**
     * Test attribute "display_name"
     */
    public function testPropertyDisplayName()
    {
    }

    /**
     * Test attribute "dominant_hand"
     */
    public function testPropertyDominantHand()
    {
    }

    /**
     * Test attribute "double_plant"
     */
    public function testPropertyDoublePlant()
    {
    }

    /**
     * Test attribute "drops"
     */
    public function testPropertyDrops()
    {
    }

    /**
     * Test attribute "durability"
     */
    public function testPropertyDurability()
    {
    }

    /**
     * Test attribute "dye"
     */
    public function testPropertyDye()
    {
    }

    /**
     * Test attribute "enchantments"
     */
    public function testPropertyEnchantments()
    {
    }

    /**
     * Test attribute "end_gateway"
     */
    public function testPropertyEndGateway()
    {
    }

    /**
     * Test attribute "exp_orb"
     */
    public function testPropertyExpOrb()
    {
    }

    /**
     * Test attribute "experience"
     */
    public function testPropertyExperience()
    {
    }

    /**
     * Test attribute "expire_ticks"
     */
    public function testPropertyExpireTicks()
    {
    }

    /**
     * Test attribute "explosion_radius"
     */
    public function testPropertyExplosionRadius()
    {
    }

    /**
     * Test attribute "extended"
     */
    public function testPropertyExtended()
    {
    }

    /**
     * Test attribute "fall_distance"
     */
    public function testPropertyFallDistance()
    {
    }

    /**
     * Test attribute "falling_block"
     */
    public function testPropertyFallingBlock()
    {
    }

    /**
     * Test attribute "filled"
     */
    public function testPropertyFilled()
    {
    }

    /**
     * Test attribute "firework_effects"
     */
    public function testPropertyFireworkEffects()
    {
    }

    /**
     * Test attribute "firework_rocket"
     */
    public function testPropertyFireworkRocket()
    {
    }

    /**
     * Test attribute "fish"
     */
    public function testPropertyFish()
    {
    }

    /**
     * Test attribute "flammable"
     */
    public function testPropertyFlammable()
    {
    }

    /**
     * Test attribute "fluid"
     */
    public function testPropertyFluid()
    {
    }

    /**
     * Test attribute "fluid_level"
     */
    public function testPropertyFluidLevel()
    {
    }

    /**
     * Test attribute "fluid_tanks"
     */
    public function testPropertyFluidTanks()
    {
    }

    /**
     * Test attribute "flying"
     */
    public function testPropertyFlying()
    {
    }

    /**
     * Test attribute "flying_ability"
     */
    public function testPropertyFlyingAbility()
    {
    }

    /**
     * Test attribute "food"
     */
    public function testPropertyFood()
    {
    }

    /**
     * Test attribute "furnace"
     */
    public function testPropertyFurnace()
    {
    }

    /**
     * Test attribute "fuse"
     */
    public function testPropertyFuse()
    {
    }

    /**
     * Test attribute "generation"
     */
    public function testPropertyGeneration()
    {
    }

    /**
     * Test attribute "glowing"
     */
    public function testPropertyGlowing()
    {
    }

    /**
     * Test attribute "golden_apple"
     */
    public function testPropertyGoldenApple()
    {
    }

    /**
     * Test attribute "griefs"
     */
    public function testPropertyGriefs()
    {
    }

    /**
     * Test attribute "growth"
     */
    public function testPropertyGrowth()
    {
    }

    /**
     * Test attribute "health"
     */
    public function testPropertyHealth()
    {
    }

    /**
     * Test attribute "hide"
     */
    public function testPropertyHide()
    {
    }

    /**
     * Test attribute "hinge"
     */
    public function testPropertyHinge()
    {
    }

    /**
     * Test attribute "horse"
     */
    public function testPropertyHorse()
    {
    }

    /**
     * Test attribute "igniteable"
     */
    public function testPropertyIgniteable()
    {
    }

    /**
     * Test attribute "in_wall"
     */
    public function testPropertyInWall()
    {
    }

    /**
     * Test attribute "inventory"
     */
    public function testPropertyInventory()
    {
    }

    /**
     * Test attribute "invisibility"
     */
    public function testPropertyInvisibility()
    {
    }

    /**
     * Test attribute "invulnerability"
     */
    public function testPropertyInvulnerability()
    {
    }

    /**
     * Test attribute "joined"
     */
    public function testPropertyJoined()
    {
    }

    /**
     * Test attribute "knockback"
     */
    public function testPropertyKnockback()
    {
    }

    /**
     * Test attribute "layer"
     */
    public function testPropertyLayer()
    {
    }

    /**
     * Test attribute "leash"
     */
    public function testPropertyLeash()
    {
    }

    /**
     * Test attribute "lock_token"
     */
    public function testPropertyLockToken()
    {
    }

    /**
     * Test attribute "log_axis"
     */
    public function testPropertyLogAxis()
    {
    }

    /**
     * Test attribute "lore"
     */
    public function testPropertyLore()
    {
    }

    /**
     * Test attribute "minecart_block"
     */
    public function testPropertyMinecartBlock()
    {
    }

    /**
     * Test attribute "mob_spawner"
     */
    public function testPropertyMobSpawner()
    {
    }

    /**
     * Test attribute "moisture"
     */
    public function testPropertyMoisture()
    {
    }

    /**
     * Test attribute "note"
     */
    public function testPropertyNote()
    {
    }

    /**
     * Test attribute "occupied"
     */
    public function testPropertyOccupied()
    {
    }

    /**
     * Test attribute "ocelot"
     */
    public function testPropertyOcelot()
    {
    }

    /**
     * Test attribute "open"
     */
    public function testPropertyOpen()
    {
    }

    /**
     * Test attribute "pages"
     */
    public function testPropertyPages()
    {
    }

    /**
     * Test attribute "passengers"
     */
    public function testPropertyPassengers()
    {
    }

    /**
     * Test attribute "persists"
     */
    public function testPropertyPersists()
    {
    }

    /**
     * Test attribute "pickup_delay"
     */
    public function testPropertyPickupDelay()
    {
    }

    /**
     * Test attribute "pickup_rule"
     */
    public function testPropertyPickupRule()
    {
    }

    /**
     * Test attribute "pig_saddle"
     */
    public function testPropertyPigSaddle()
    {
    }

    /**
     * Test attribute "piston"
     */
    public function testPropertyPiston()
    {
    }

    /**
     * Test attribute "placeable_on"
     */
    public function testPropertyPlaceableOn()
    {
    }

    /**
     * Test attribute "plant"
     */
    public function testPropertyPlant()
    {
    }

    /**
     * Test attribute "player_created"
     */
    public function testPropertyPlayerCreated()
    {
    }

    /**
     * Test attribute "playing"
     */
    public function testPropertyPlaying()
    {
    }

    /**
     * Test attribute "portion"
     */
    public function testPropertyPortion()
    {
    }

    /**
     * Test attribute "potion_effects"
     */
    public function testPropertyPotionEffects()
    {
    }

    /**
     * Test attribute "powered"
     */
    public function testPropertyPowered()
    {
    }

    /**
     * Test attribute "prismarine"
     */
    public function testPropertyPrismarine()
    {
    }

    /**
     * Test attribute "quartz"
     */
    public function testPropertyQuartz()
    {
    }

    /**
     * Test attribute "rabbit"
     */
    public function testPropertyRabbit()
    {
    }

    /**
     * Test attribute "rail_direction"
     */
    public function testPropertyRailDirection()
    {
    }

    /**
     * Test attribute "redstone_power"
     */
    public function testPropertyRedstonePower()
    {
    }

    /**
     * Test attribute "represented_item"
     */
    public function testPropertyRepresentedItem()
    {
    }

    /**
     * Test attribute "represented_player"
     */
    public function testPropertyRepresentedPlayer()
    {
    }

    /**
     * Test attribute "respawn_locations"
     */
    public function testPropertyRespawnLocations()
    {
    }

    /**
     * Test attribute "sand"
     */
    public function testPropertySand()
    {
    }

    /**
     * Test attribute "sand_stone"
     */
    public function testPropertySandStone()
    {
    }

    /**
     * Test attribute "screaming"
     */
    public function testPropertyScreaming()
    {
    }

    /**
     * Test attribute "seamless"
     */
    public function testPropertySeamless()
    {
    }

    /**
     * Test attribute "shatters"
     */
    public function testPropertyShatters()
    {
    }

    /**
     * Test attribute "sheared"
     */
    public function testPropertySheared()
    {
    }

    /**
     * Test attribute "shrub"
     */
    public function testPropertyShrub()
    {
    }

    /**
     * Test attribute "sign"
     */
    public function testPropertySign()
    {
    }

    /**
     * Test attribute "silent"
     */
    public function testPropertySilent()
    {
    }

    /**
     * Test attribute "sitting"
     */
    public function testPropertySitting()
    {
    }

    /**
     * Test attribute "skin"
     */
    public function testPropertySkin()
    {
    }

    /**
     * Test attribute "skull"
     */
    public function testPropertySkull()
    {
    }

    /**
     * Test attribute "slab"
     */
    public function testPropertySlab()
    {
    }

    /**
     * Test attribute "sleeping"
     */
    public function testPropertySleeping()
    {
    }

    /**
     * Test attribute "slime"
     */
    public function testPropertySlime()
    {
    }

    /**
     * Test attribute "sneaking"
     */
    public function testPropertySneaking()
    {
    }

    /**
     * Test attribute "snow"
     */
    public function testPropertySnow()
    {
    }

    /**
     * Test attribute "sprinting"
     */
    public function testPropertySprinting()
    {
    }

    /**
     * Test attribute "stair_shape"
     */
    public function testPropertyStairShape()
    {
    }

    /**
     * Test attribute "statistics"
     */
    public function testPropertyStatistics()
    {
    }

    /**
     * Test attribute "stone"
     */
    public function testPropertyStone()
    {
    }

    /**
     * Test attribute "stored_enchantments"
     */
    public function testPropertyStoredEnchantments()
    {
    }

    /**
     * Test attribute "structure"
     */
    public function testPropertyStructure()
    {
    }

    /**
     * Test attribute "stuck_arrows"
     */
    public function testPropertyStuckArrows()
    {
    }

    /**
     * Test attribute "tamed"
     */
    public function testPropertyTamed()
    {
    }

    /**
     * Test attribute "target"
     */
    public function testPropertyTarget()
    {
    }

    /**
     * Test attribute "trades"
     */
    public function testPropertyTrades()
    {
    }

    /**
     * Test attribute "tree"
     */
    public function testPropertyTree()
    {
    }

    /**
     * Test attribute "vehicle"
     */
    public function testPropertyVehicle()
    {
    }

    /**
     * Test attribute "wall"
     */
    public function testPropertyWall()
    {
    }

    /**
     * Test attribute "wet"
     */
    public function testPropertyWet()
    {
    }

    /**
     * Test attribute "wires"
     */
    public function testPropertyWires()
    {
    }

    /**
     * Test attribute "accepts_items"
     */
    public function testPropertyAcceptsItems()
    {
    }

    /**
     * Test attribute "applicable_effect"
     */
    public function testPropertyApplicableEffect()
    {
    }

    /**
     * Test attribute "armor_slot_type"
     */
    public function testPropertyArmorSlotType()
    {
    }

    /**
     * Test attribute "armor_type"
     */
    public function testPropertyArmorType()
    {
    }

    /**
     * Test attribute "blast_resistance"
     */
    public function testPropertyBlastResistance()
    {
    }

    /**
     * Test attribute "burning_fuel"
     */
    public function testPropertyBurningFuel()
    {
    }

    /**
     * Test attribute "damage_absorption"
     */
    public function testPropertyDamageAbsorption()
    {
    }

    /**
     * Test attribute "efficiency"
     */
    public function testPropertyEfficiency()
    {
    }

    /**
     * Test attribute "equipment_type"
     */
    public function testPropertyEquipmentType()
    {
    }

    /**
     * Test attribute "equiptment_slot_type"
     */
    public function testPropertyEquiptmentSlotType()
    {
    }

    /**
     * Test attribute "eye_height"
     */
    public function testPropertyEyeHeight()
    {
    }

    /**
     * Test attribute "eye_location"
     */
    public function testPropertyEyeLocation()
    {
    }

    /**
     * Test attribute "fluid_temperature"
     */
    public function testPropertyFluidTemperature()
    {
    }

    /**
     * Test attribute "fluid_viscosity"
     */
    public function testPropertyFluidViscosity()
    {
    }

    /**
     * Test attribute "food_restoration"
     */
    public function testPropertyFoodRestoration()
    {
    }

    /**
     * Test attribute "full_block_selection_box"
     */
    public function testPropertyFullBlockSelectionBox()
    {
    }

    /**
     * Test attribute "gravity_affected"
     */
    public function testPropertyGravityAffected()
    {
    }

    /**
     * Test attribute "ground_luminance"
     */
    public function testPropertyGroundLuminance()
    {
    }

    /**
     * Test attribute "gui_id"
     */
    public function testPropertyGuiId()
    {
    }

    /**
     * Test attribute "hardness"
     */
    public function testPropertyHardness()
    {
    }

    /**
     * Test attribute "held_item"
     */
    public function testPropertyHeldItem()
    {
    }

    /**
     * Test attribute "identifiable"
     */
    public function testPropertyIdentifiable()
    {
    }

    /**
     * Test attribute "indirectly_powered"
     */
    public function testPropertyIndirectlyPowered()
    {
    }

    /**
     * Test attribute "instrument"
     */
    public function testPropertyInstrument()
    {
    }

    /**
     * Test attribute "inventory_capacity"
     */
    public function testPropertyInventoryCapacity()
    {
    }

    /**
     * Test attribute "inventory_dimension"
     */
    public function testPropertyInventoryDimension()
    {
    }

    /**
     * Test attribute "inventory_title"
     */
    public function testPropertyInventoryTitle()
    {
    }

    /**
     * Test attribute "light_emission"
     */
    public function testPropertyLightEmission()
    {
    }

    /**
     * Test attribute "matter"
     */
    public function testPropertyMatter()
    {
    }

    /**
     * Test attribute "passable"
     */
    public function testPropertyPassable()
    {
    }

    /**
     * Test attribute "record"
     */
    public function testPropertyRecord()
    {
    }

    /**
     * Test attribute "replaceable"
     */
    public function testPropertyReplaceable()
    {
    }

    /**
     * Test attribute "saturation_property"
     */
    public function testPropertySaturationProperty()
    {
    }

    /**
     * Test attribute "sky_luminance"
     */
    public function testPropertySkyLuminance()
    {
    }

    /**
     * Test attribute "slot_index"
     */
    public function testPropertySlotIndex()
    {
    }

    /**
     * Test attribute "slot_pos"
     */
    public function testPropertySlotPos()
    {
    }

    /**
     * Test attribute "slot_side"
     */
    public function testPropertySlotSide()
    {
    }

    /**
     * Test attribute "smeltable"
     */
    public function testPropertySmeltable()
    {
    }

    /**
     * Test attribute "solid_cube"
     */
    public function testPropertySolidCube()
    {
    }

    /**
     * Test attribute "statistics_tracked"
     */
    public function testPropertyStatisticsTracked()
    {
    }

    /**
     * Test attribute "surrogate_block"
     */
    public function testPropertySurrogateBlock()
    {
    }

    /**
     * Test attribute "temperature"
     */
    public function testPropertyTemperature()
    {
    }

    /**
     * Test attribute "tool_type"
     */
    public function testPropertyToolType()
    {
    }

    /**
     * Test attribute "unbreakable"
     */
    public function testPropertyUnbreakable()
    {
    }

    /**
     * Test attribute "use_limit"
     */
    public function testPropertyUseLimit()
    {
    }
}
