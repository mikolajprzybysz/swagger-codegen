<?php
/**
 * AnimalFarmTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * AnimalFarmTest Class Doc Comment
 *
 * @category    Class
 * @description AnimalFarm
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AnimalFarmTest extends \PHPUnit_Framework_TestCase
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
     * Test "AnimalFarm"
     */
    public function testAnimalFarm()
    {

    }

    // test if default values works
    public function testDefaultValues()
    {
        // add some animals to the farm to make sure the ArrayAccess
        // interface works
        $dog = new Model\Dog();
        $animal = new Model\Animal();

        // assert we can look up the animals in the farm by array
        // indices (let's try a random order)
        $this->assertSame('red', $dog->getColor());
        $this->assertSame('red', $animal->getColor());
    }

    // test inheritance in the model
    public function testInheritance()
    {
        $new_dog = new Model\Dog;
        // the object should be an instance of the derived class
        $this->assertInstanceOf('Swagger\Client\Model\Dog', $new_dog);
        // the object should also be an instance of the parent class
        $this->assertInstanceOf('Swagger\Client\Model\Animal', $new_dog);
    }

    // test inheritance constructor is working with data
    // initialization
    public function testInheritanceConstructorDataInitialization()
    {
        // initialize the object with data in the constructor
        $data = array(
            'class_name' => 'Dog',
            'breed' => 'Great Dane'
        );
        $new_dog = new Model\Dog($data);

        // the property on the derived class should be set
        $this->assertSame('Great Dane', $new_dog->getBreed());
        // the property on the parent class should be set
        $this->assertSame('Dog', $new_dog->getClassName());
    }

    // test if discriminator is initialized automatically
    public function testDiscriminatorInitialization()
    {
        $new_dog = new Model\Dog();
        $this->assertSame('Dog', $new_dog->getClassName());
    }

    // test if ArrayAccess interface works
    public function testArrayStuff()
    {
        // create an AnimalFarm which is an object implementing the
        // ArrayAccess interface
        $farm = new Model\AnimalFarm();

        // add some animals to the farm to make sure the ArrayAccess
        // interface works
        $farm[] = new Model\Dog();
        $farm[] = new Model\Cat();
        $farm[] = new Model\Animal();

        // assert we can look up the animals in the farm by array
        // indices (let's try a random order)
        $this->assertInstanceOf('Swagger\Client\Model\Cat', $farm[1]);
        $this->assertInstanceOf('Swagger\Client\Model\Dog', $farm[0]);
        $this->assertInstanceOf('Swagger\Client\Model\Animal', $farm[2]);

        // let's try to `foreach` the animals in the farm and let's
        // try to use the objects we loop through
        foreach ($farm as $animal) {
            $this->assertContains($animal->getClassName(), array('Dog', 'Cat', 'Animal'));
            $this->assertInstanceOf('Swagger\Client\Model\Animal', $animal);
        }
    }
}
