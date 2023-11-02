<?php

namespace App\Entity;
/**
 * Defines the properties of a representation of a bicycle.
 * 
 * @author William Clark <w.max.clark@gmail.com>
 */
class Bicycle{

    /**
     * The manufacturer of the bicycle as a company name.
     */
    private string $make;
    /**
     * The year the bicycle was constructed
     */
    private int $modelYear;
    /**
     * The name of the model
     */
    private string $modelName;
    /**
     * The front wheel
     */
    private Wheel $frontWheel;
    /**
     * The rear wheel
     */
    private Wheel $rearWheel;
    
    public function __construct(string $make = 'RadPower', int $modelYear = 2023, string $modelName = 'Slash 9.9 XTR Gen 5') {
        $this->make = $make;
        $this->modelYear = $modelYear;
        $this->frontWheel = new Wheel();
        $this->rearWheel = new Wheel();
    }
}