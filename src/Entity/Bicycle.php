<?php

namespace App\Entity;

use App\Entity\Wheel;

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
    
    public function __construct(string $make = 'RadPower', int $modelYear = 2023, string $modelName = 'RadCity') {
        $this->make = $make;
        $this->modelYear = $modelYear;
        $this->frontWheel = new Wheel();
        $this->rearWheel = new Wheel();
    }

	/**
	 * The year the bicycle was constructed
	 * @return int
	 */
	public function getModelYear(): int {
		return $this->modelYear;
	}
	
	/**
	 * The year the bicycle was constructed
	 * @param int $modelYear The year the bicycle was constructed
	 * @return self
	 */
	public function setModelYear(int $modelYear): self {
		$this->modelYear = $modelYear;
		return $this;
	}

	/**
	 * The name of the model
	 * @return string
	 */
	public function getModelName(): string {
		return $this->modelName;
	}
	
	/**
	 * The name of the model
	 * @param string $modelName The name of the model
	 * @return self
	 */
	public function setModelName(string $modelName): self {
		$this->modelName = $modelName;
		return $this;
	}

	/**
	 * The front wheel
	 * @return Wheel
	 */
	public function getFrontWheel(): Wheel {
		return $this->frontWheel;
	}
	
	/**
	 * The front wheel
	 * @param Wheel $frontWheel The front wheel
	 * @return self
	 */
	public function setFrontWheel(Wheel $frontWheel): self {
		$this->frontWheel = $frontWheel;
		return $this;
	}

	/**
	 * The rear wheel
	 * @return Wheel
	 */
	public function getRearWheel(): Wheel {
		return $this->rearWheel;
	}
	
	/**
	 * The rear wheel
	 * @param Wheel $rearWheel The rear wheel
	 * @return self
	 */
	public function setRearWheel(Wheel $rearWheel): self {
		$this->rearWheel = $rearWheel;
		return $this;
	}
}