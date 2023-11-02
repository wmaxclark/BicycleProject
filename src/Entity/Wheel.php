<?php

namespace App\Entity;

/**
 * Defines the properties of a representation of a wheel.
 * 
 * @author William Clark <w.max.clark@gmail.com>
 */
class Wheel{

    /**
     * Diameter of the wheel in millimeters
     */
    private int $diameter;
    /**
     * Diameter of the wheel in millimeters
     */
    private int $width;
    /**
     * The air pressure of the tire in pound per square inch gauge
     */
    private int $pressure;
    

    public function __construct(int $diameter = 622, int $width = 37, int $pressure = 60) {
        $this->diameter = $diameter;
        $this->width = $width;
        $this->pressure = $pressure;
    }
}