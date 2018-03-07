<?php

require_once 'autoloader.php';

use Tools\Metadata;
use Tools\Serializer;
use Tools\Normalize;

class Car 
{
    private $plateNumber;
    private $color;
    private $brand;
    private $constructionYear;
    private $numberOfDoors;
    
    private $registeredCars = [];
    
    public function __construct(){
    }
    
    /**
     * @return mixed
     */
    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getConstructionYear()
    {
        return $this->constructionYear;
    }

    /**
     * @return mixed
     */
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $constructionYear
     */
    public function setConstructionYear($constructionYear)
    {
        $this->constructionYear = $constructionYear;
    }

    /**
     * @param mixed $numberOfDoors
     */
    public function setNumberOfDoors($numberOfDoors)
    {
        $this->numberOfDoors = $numberOfDoors;
    }
}

$car = new Car();
$car->setColor('white');
$car->setBrand('BMW');
$arrayMap = ['getBrand' => 'brand', 'getColor' => 'color'];

$metadata = new Metadata($arrayMap);
$config = $metadata->getConfiguration();
$normalizeObject = new Normalize();
$normalized = $normalizeObject->normalizer($car, $config);
$serializerObject = new Serializer();
$serialized = $serializerObject->serializer($normalized, 'json');

var_dump($serialized);

