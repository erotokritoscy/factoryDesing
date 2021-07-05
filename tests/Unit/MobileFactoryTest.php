<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;



/**
 *
 */
interface SmartPhone
{
    public function getOS();
    public function getName();
}

/**
 *
 */
class Xiaomi implements SmartPhone
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getOS(){
        return 'Android';
    }

    public function getName(){
        return $this->name;
    }
}

/**
 *
 */
class Iphone implements SmartPhone
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getOS(){
        return 'iOS';
    }

    public function getName(){
        return $this->name;
    }
}

/**
 *
 */
interface SmartPhoneFactory
{
    public function create($name);
}

/**
 *
 */
class XiaomiFactory implements SmartPhoneFactory
{
    public function create($name){
        return new Xiaomi($name);
    }
}


/**
 *
 */
class IphoneFactory implements SmartPhoneFactory
{
    public function create($name){
        return new Iphone($name);
    }
}





class MobileFactoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_factory()
    {
        $xiaomi1 = XiaomiFactory::create('Redmi 8');
        $output = $xiaomi1->getName() . ' ' . $xiaomi1->getOS();
        // dd($output);

        $this->assertTrue(true);
    }




}
