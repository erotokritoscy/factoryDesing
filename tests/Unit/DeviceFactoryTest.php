<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 *
 */
interface Device
{
    public function getType();
}

/**
 *
 */
class Laptop implements Device
{

    public function getType()
    {
        return 'Laptop';
    }
}

/**
 *
 */
class TV implements Device
{

    public function getType()
    {
        return 'TV';
    }
}

/**
 *
 */
class DeviceFactory
{

    public function create($device)
    {
        switch ($device) {
            case 'TV':
                return new TV();
            case 'Laptop':
                return new Laptop();
            return null;
        }
    }
}


class DeviceFactoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $device = DeviceFactory::create('TV');
        $this->assertTrue($device->getType() == 'TV');
    }
}
